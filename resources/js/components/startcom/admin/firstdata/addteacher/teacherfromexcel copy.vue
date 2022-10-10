<template>
    <div>
         <div class="fixed p-2 top-0 right-0   bg-green-200">
             <button v-if="datamsg" @click="copyme(datamsg)"> {{copymsg}}</button>
             <p>{{datamsg}}</p>
             <!-- <p>datamsg:{{datamsg}}</p> -->
         </div>

        <p>teacherfromexcel</p>
        <input type="file" id="file_upload" @change="onChange"/>
    <button @click="upload()">Upload</button><br>
    <!-- table to display the excel data  border="1"v-model="display_excel_datavue"id="display_excel_data"-->
<button v-if="myjsonData!=null" @click="createfromexcel()">create from excel save</button>
    <table class="tbl1"  v-html="display_excel_datavue"></table>
    </div>
</template>
<script>
import axios from 'axios';
  import * as XLSX from 'XLSX'
export default {
data() {
    return {
        

        datamsg: null,
        copymsg: 'Copy',
      file: null,
      display_excel_datavue: null,
      myjsonData:null,
      titlearray:[],
    //   titlearray:['Id',	'Title'	,'Author'	,'Readings',	'Date'],
    }
  },//data
    methods: {
copyme(txt) {
// document.execCommand(txt);
navigator.clipboard.writeText(JSON.stringify( txt))
this.copymsg='copied!'
// .then(function() {
//     /* clipboard successfully set */
//     this.copymsg='copied!'
//   }, function() {
//     /* clipboard write failed */
//     this.copymsg='error '
//   });

 setTimeout(() => this.copymsg = 'Copy', 2000);
},
        
onChange(event) {
            this.file = event.target.files ? event.target.files[0] : null;
            // alert('ok')
            this.upload()
},//onChange

 // Method to upload a valid excel file
upload() {
        // var files = document.getElementById('file_upload').files;
        var files = this.file;
            if(files.length==0){
            alert("Please choose any file...");
            return;
            }
        var filename = files.name;
        // var filename = files[0].name;
        // console.log('filename')
        // console.log(filename)
        var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
        if (extension == '.XLS' || extension == '.XLSX') {
            //Here calling another method to read excel file into json
            // excelFileToJSON(files[0]);
            // console.log('excelFileToJSON114444')
            this.excelFileToJSON11(files);
            // console.log('excelFileToJSON11555')
        }else{
            alert("Please select a valid excel file.");
        }
      },//upload

             //Method to read excel file and convert it into JSON
excelFileToJSON11(file){
        // console.log('excelFileToJSON11')
          try {
            var reader = new FileReader();
            reader.readAsBinaryString(file);
            reader.onload = (e)=> {
                var data = e.target.result;
                var workbook = XLSX.read(data, {
                    type : 'binary'
                });
                var result = {};
                var firstSheetName = workbook.SheetNames[0];
                //reading only first sheet data
                var jsonData = XLSX.utils.sheet_to_json(workbook.Sheets[firstSheetName]);
                this.myjsonData=jsonData
                //displaying the json result into HTML table
                this.displayJsonToHtmlTable(jsonData);
                }
            }catch(e){
                console.error(e);
            }
      },//excelFileToJSON11

      //Method to display the data in HTML Table
displayJsonToHtmlTable(jsonData){
        // var table=document.getElementById("display_excel_data");
        // var table=this.display_excel_datavue;
        // console.log('jsonData')
        // console.log(jsonData)
// return if no file-----------------------------------------------------------------------------------------
                if(jsonData.length<1){return this.display_excel_datavue='There is no data in Excel';}// return if no file
// return if no file-----------------------------------------------------------------------------------------



// jsonData[i]
var htmlth=''
this.titlearray=Object.keys(jsonData[0])
for (let index2 = 0; index2 < this.titlearray.length; index2++) {
// this.titlearray[index]
htmlth+='<th>'+this.titlearray[index2]+'</th>'

 }
            var htmlData='<tr>'+htmlth+'</tr>';
            // var htmlData='<tr>
            // <th>Student Name</th>
            // <th>Address</th>
            // <th>Email ID</th>
            // <th>Age</th>
            // </tr>';





for(var i=0;i<jsonData.length;i++){
                var row=jsonData[i];
            //     htmlData+='<tr><td>'+row["Student Name"]+'</td><td>'+row["Address"]
            //           +'</td><td>'+row["Email ID"]
            //           +'</td><td>'
            //           +row["Age"]
            //            +'</td><td>'
            //           +row["classroom"]
            //           +'</td></tr>';
            // }
// Id	Title	Author	Readings	Date
// if (i==0) {
// this.titlearray=Object.keys(row)
// }

// generat data=======================================================================
var arraydata=''
var array=this.titlearray
for (let index = 0; index < array.length; index++) {
    // const element = array[index];
arraydata+='<td>'+row[this.titlearray[index]]+'</td>'
// console.log(arraydata)
}
// generat data=======================================================================

//generate titles------------------------------------------------------------------------


//generate titles------------------------------------------------------------------------

                                htmlData+='<tr>'+ arraydata +'</tr>';
            }






            this.display_excel_datavue=htmlData;
        // }
        // else{
        //     // table.innerHTML='There is no data in Excel';
        //      this.display_excel_datavue='There is no data in Excel';
        // }
      },// displayJsonToHtmlTable

// =============================================================================
async   createfromexcel(){
// update(){
    // this.jsonData
        // console.log("this.jsonData"+this.myjsonData);

    this.datamsg = 'saving teachers ...'; 
    try{
        await axios.post('/api/teacher/createfromexcel',this.myjsonData)
    .then((res) => {
        this.datamsg =res.data.message;
        // console.log(res.data);
        // console.log(res.data.message);
    });
    } catch (e) {
    this.datamsg = 'data error';
    }
    setTimeout(() => this.datamsg = '', 5000);
}, 

// =============================================================================
    },


}
</script>
<style>
    
</style>