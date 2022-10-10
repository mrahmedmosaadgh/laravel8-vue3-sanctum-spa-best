<template>
    <div>
         <div class="fixed p-2 top-0 right-0   bg-green-200">
            <button v-if="datamsg" @click="copyme(datamsg)"> {{copymsg}}</button>
<p>{{datamsg}}</p>

<div>=================
    <span class="clearicon cursor-pointer"><span class="multiselect-clear-icon"></span></span>
</div>=====================



<!-- <p>datamsg:{{datamsg}}</p> -->
</div>


<p>options1:{{options1}}</p>
<!-- <p><svg class="w-2 cursor-pointer   " fill='red' version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 122.881 122.88" fill="green" enable-background="new 0 0 122.881 122.88" xml:space="preserve"><g><path d="M56.573,4.868c0-0.655,0.132-1.283,0.37-1.859c0.249-0.6,0.61-1.137,1.056-1.583C58.879,0.545,60.097,0,61.44,0 c0.658,0,1.287,0.132,1.863,0.371c0.012,0.005,0.023,0.011,0.037,0.017c0.584,0.248,1.107,0.603,1.543,1.039 c0.881,0.88,1.426,2.098,1.426,3.442c0,0.03-0.002,0.06-0.006,0.089v51.62l51.619,0c0.029-0.003,0.061-0.006,0.09-0.006 c0.656,0,1.285,0.132,1.861,0.371c0.014,0.005,0.025,0.011,0.037,0.017c0.584,0.248,1.107,0.603,1.543,1.039 c0.881,0.88,1.428,2.098,1.428,3.441c0,0.654-0.133,1.283-0.371,1.859c-0.248,0.6-0.609,1.137-1.057,1.583 c-0.445,0.445-0.98,0.806-1.58,1.055v0.001c-0.576,0.238-1.205,0.37-1.861,0.37c-0.029,0-0.061-0.002-0.09-0.006l-51.619,0.001 v51.619c0.004,0.029,0.006,0.06,0.006,0.09c0,0.656-0.133,1.286-0.371,1.861c-0.006,0.014-0.012,0.025-0.018,0.037 c-0.248,0.584-0.602,1.107-1.037,1.543c-0.883,0.882-2.1,1.427-3.443,1.427c-0.654,0-1.283-0.132-1.859-0.371 c-0.6-0.248-1.137-0.609-1.583-1.056c-0.445-0.444-0.806-0.98-1.055-1.58h-0.001c-0.239-0.575-0.371-1.205-0.371-1.861 c0-0.03,0.002-0.061,0.006-0.09V66.303H4.958c-0.029,0.004-0.059,0.006-0.09,0.006c-0.654,0-1.283-0.132-1.859-0.371 c-0.6-0.248-1.137-0.609-1.583-1.056c-0.445-0.445-0.806-0.98-1.055-1.58H0.371C0.132,62.726,0,62.097,0,61.44 c0-0.655,0.132-1.283,0.371-1.859c0.249-0.6,0.61-1.137,1.056-1.583c0.881-0.881,2.098-1.426,3.442-1.426 c0.031,0,0.061,0.002,0.09,0.006l51.62,0l0-51.62C56.575,4.928,56.573,4.898,56.573,4.868L56.573,4.868z"/></g></svg></p> -->
<!-- {{cleargrean}} -->
<!-- <div class="clearicon">clear</div> -->
<!-- <img src="img/clear.svg" class=" w-2 cursor-pointer hover:translate-x-1 focus:border-green-700 hover:bg-purple-500" alt=""> -->
<img :src="cleargrean" class=" w-2 cursor-pointer hover:translate-x-1 focus:border-green-700 hover:bg-purple-500" alt="">
        <p>teacherfromexcel_update</p>
        <input type="file" id="file_upload" @change="onChange"/>
    <button @click="upload()">Upload</button><br>
    <!-- v-html="display_excel_datavue" table to display the excel data  border="1"v-model="display_excel_datavue"id="display_excel_data"-->
<button v-if="myjsonData!=null" @click="createfromexcel()">save</button>
   
   <br>
   <!-- <p>myjsonData:{{myjsonData}}</p> -->
     <!--<p>myjsonDatacom:{{myjsonDatacom}}</p>   -->
   
    <table class="tbl1" >
        <tr>
            <th v-for="(item,index) in titlearray" :key="index">{{titlearray[index]}}</th>
        </tr>
        <tr v-for="(item2,index2) in myjsonData" :key="index2">
            <!-- <td>{{item2[]}}</td> -->
            <td>{{item2[titlearray[0]]}}</td>
            <td>{{item2[titlearray[1]]}}</td>
            <td>{{item2[titlearray[2]]}}</td>
            <td>
                            <Multiselect
    v-model="subjectsarraydb[index2]"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"
  :options="subjectsarray"
/>

                {{subjectsarraydb[index2]}}</td>
            <!-- <td>{{item2[titlearray[4]]}}</td> -->
            <td>
            <Multiselect
    v-model="classnamesarraydb[index2]"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"
  :options="classnamesarray"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
 search: '   border-0 hvr-box-shadow-none focus-box-shadow-none   ',
}"
/>
                {{classnamesarraydb[index2]}}
                </td>
            <td>{{item2[titlearray[5]]}}</td>
        </tr>
    </table>
    </div>
</template>
<script>
import axios from 'axios';
  import * as XLSX from 'XLSX'
  import Multiselect from '@vueform/multiselect'

export default {
        components: {
      Multiselect,
    },
data() {
    return {
        options1             :['22'],
        datamsg              :null  ,
        copymsg              :'Copy',
        file                 :null  ,
        display_excel_datavue:null  ,
        myjsonData           :null  ,
        titlearray           :[]    ,
        subjectsarraydb      :[]    ,
        classnamesarraydb    :[]    ,
        classnamesarray    :[ "5A", "5B", "7A", "7B", "8A" , "11A", "11B", "12A"]    ,
        subjectsarray        :['Ar','En','Math','SSE','Sc']    ,
        subjectsarraydb        :[]    ,
        cleargrean        :"<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'  viewBox='0 0 122.881 122.88' fill='green' enable-background='new 0 0 122.881 122.88' xml:space='preserve'><g><path d='M56.573,4.868c0-0.655,0.132-1.283,0.37-1.859c0.249-0.6,0.61-1.137,1.056-1.583C58.879,0.545,60.097,0,61.44,0 c0.658,0,1.287,0.132,1.863,0.371c0.012,0.005,0.023,0.011,0.037,0.017c0.584,0.248,1.107,0.603,1.543,1.039 c0.881,0.88,1.426,2.098,1.426,3.442c0,0.03-0.002,0.06-0.006,0.089v51.62l51.619,0c0.029-0.003,0.061-0.006,0.09-0.006 c0.656,0,1.285,0.132,1.861,0.371c0.014,0.005,0.025,0.011,0.037,0.017c0.584,0.248,1.107,0.603,1.543,1.039 c0.881,0.88,1.428,2.098,1.428,3.441c0,0.654-0.133,1.283-0.371,1.859c-0.248,0.6-0.609,1.137-1.057,1.583 c-0.445,0.445-0.98,0.806-1.58,1.055v0.001c-0.576,0.238-1.205,0.37-1.861,0.37c-0.029,0-0.061-0.002-0.09-0.006l-51.619,0.001 v51.619c0.004,0.029,0.006,0.06,0.006,0.09c0,0.656-0.133,1.286-0.371,1.861c-0.006,0.014-0.012,0.025-0.018,0.037 c-0.248,0.584-0.602,1.107-1.037,1.543c-0.883,0.882-2.1,1.427-3.443,1.427c-0.654,0-1.283-0.132-1.859-0.371 c-0.6-0.248-1.137-0.609-1.583-1.056c-0.445-0.444-0.806-0.98-1.055-1.58h-0.001c-0.239-0.575-0.371-1.205-0.371-1.861 c0-0.03,0.002-0.061,0.006-0.09V66.303H4.958c-0.029,0.004-0.059,0.006-0.09,0.006c-0.654,0-1.283-0.132-1.859-0.371 c-0.6-0.248-1.137-0.609-1.583-1.056c-0.445-0.445-0.806-0.98-1.055-1.58H0.371C0.132,62.726,0,62.097,0,61.44 c0-0.655,0.132-1.283,0.371-1.859c0.249-0.6,0.61-1.137,1.056-1.583c0.881-0.881,2.098-1.426,3.442-1.426 c0.031,0,0.061,0.002,0.09,0.006l51.62,0l0-51.62C56.575,4.928,56.573,4.898,56.573,4.868L56.573,4.868z'/></g></svg>"   ,
    //   titlearray:['Id',	'Title'	,'Author'	,'Readings',	'Date'],
    }
  },//data
//   computed:{
// myjsonDatacom(){
// // this.titlearray=Object.keys(jsonData[0])
// // this.myjsonData=jsonData


//     return this.myjsonData
// }
//   },
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
this.myjsonData=jsonData
for (let index2 = 0; index2 < this.titlearray.length; index2++) {
// this.titlearray[index]
htmlth+='<th>'+this.titlearray[index2]+'</th>'

 }
            var htmlData='<tr>'+htmlth+'</tr>';
            // var htmlData='<tr>subjectsarray
            // <th>Student Name</th>
            // <th>Address</th>
            // <th>Email ID</th>
            // <th>Age</th>
            // </tr>';



 this.classnamesarraydb=[]
this.subjectsarraydb=[]
for(var i=0;i<jsonData.length;i++){
this.classnamesarraydb.push([ "5A", "5B", "7A", "7B", "8A" ])
this.subjectsarraydb.push(['En'])
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
// for (let index = 0; index < array.length; index++) {
//     // const element = array[index];

// arraydata+='<td>'+row[this.titlearray[index]]+'</td>'
// // console.log(arraydata)
// }

arraydata+='<td>'+row[this.titlearray[0]]+'</td>'
arraydata+='<td>'+row[this.titlearray[1]]+'</td>'
arraydata+='<td>'+row[this.titlearray[2]]+'</td>'
arraydata+='<td>'+row[this.titlearray[3]]+'</td>'

// arraydata+='<td>'+row[this.titlearray[4]]+'</td>'
arraydata+='<td>'+
"<select v-model='options1' name='cars' id='cars' multiple ><option value='volvo'>Volvo</option><option value='saab'>Saab</option><option value='opel'>Opel</option><option value='audi'>Audi</option></select>"
// "<Multiselect "+ "v-model='classnamesarraydb'"

//  +"mode='tags'"
//  + ":close-on-select='false'"
//  + ":searchable='true'"
//  + ":create-option='false'"
//  + ":options='classnamesarray'"
//  + ":classes='{"
//  +"container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',"
//  +"tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',"
//  +"search: '   border-0 hvr-box-shadow-none focus-box-shadow-none   ',}'/>"







+'</td>'

arraydata+='<td>'+row[this.titlearray[5]]+'</td>'
arraydata+='<td>'+row[this.titlearray[6]]+'</td>'




// N	namear	nameen	subjects	classes	stage	notes1
// arraydata+='<td>'+row['N']+'</td>'
// arraydata+='<td>'+row['N']+'</td>'




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

// =============================================================================
async   updatefromexcel(){
// update(){
    // this.jsonData
        // console.log("this.jsonData"+this.myjsonData);

    this.datamsg = 'updating teachers ...'; 
    try{
        await axios.post('/api/teacher/updatefromexcel',this.myjsonData)
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