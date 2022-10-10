<template>
    <div>
        Laravel8Vue3SanctumSpaBest3Teacherfromexcelforqan
   <p class=" bg-orange-200">{{datamsg}}</p>
           <input type="file" id="file_upload" @change="onChange"/>
    <button @click="upload()">Upload</button><br>
   
   
<button v-if="myjsonData!=null" @click="createfromexcel()">create from excel save createfromexcel</button>
<button v-if="myjsonData!=null" @click="createstudentsfromexcel()">create from excel save createstudentsfromexcel</button>
    <table class="tbl1"  v-html="display_excel_datavue"></table>
   
   
   
   
   
   
   
   
    </div>
</template>

<script>
import axios from 'axios';
  
  import * as XLSX from 'XLSX'
export default {
    name: 'Laravel8Vue3SanctumSpaBest3Teacherfromexcelforqan',

    data() {
        return {
                    datamsg: null,
        copymsg: 'Copy',
      file: null,
      display_excel_datavue: null,
      myjsonData:null,
      titlearray:[],
        };
    },

    mounted() {
        
    },

    methods: {
        onChange(event) {
            this.file = event.target.files ? event.target.files[0] : null;
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
    alert('createfromexcel')
// update(){
    // this.jsonData
        // console.log("this.jsonData"+this.myjsonData);
console.log(this.myjsonData);

    this.datamsg = 'saving teachers ...'; 
    try{
        await axios.post('/api/teacher/createfromexcelforqan',this.myjsonData)
    .then((res) => {
        this.datamsg =res.data;
        console.log(res.data);
        // console.log(res.data.message);
    });
    } catch (e) {
    this.datamsg = 'data error';
    }
    setTimeout(() => this.datamsg = '', 5000);
}, 

// =============================================================================
 
// =============================================================================
async   createstudentsfromexcel(){
    alert('createstudentsfromexcelforqan')
// update(){
    // this.jsonData
        // console.log("this.jsonData"+this.myjsonData);
console.log(this.myjsonData);

    this.datamsg = 'saving teachers ...'; 
    try{
        await axios.post('/api/teacher/createstudentsfromexcelforqan',this.myjsonData)
    .then((res) => {
        this.datamsg =res.data;
        console.log(res.data);
        // console.log(res.data.message);
    });
    } catch (e) {
    this.datamsg = 'data error';
    }
    setTimeout(() => this.datamsg = '', 5000);
}, 

// =============================================================================
 


    },
};
</script>