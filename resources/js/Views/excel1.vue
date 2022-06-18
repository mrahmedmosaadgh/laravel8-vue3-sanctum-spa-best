<template lang="en">
    <div>
         <h1>Upload an excel file to display in HTML Table</h1>
    <!-- Input element to upload an excel file -->
    <input type="file" id="file_upload" 
     
 @change="onChange"

    />

    <button @click="upload()">
    Upload
    </button>  
    <br>
    <br>
    <!-- table to display the excel data  border="1"v-model="display_excel_datavue"id="display_excel_data"  
-->
    <table 
     v-html="display_excel_datavue"
     
    ></table>
    <!-- <div  v-html="display_excel_datavue"></div> -->
<!-- <div v-html="html"></div> -->



    </div>
</template>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.min.js"></script>    -->
<script>
  import * as XLSX from 'XLSX'
//   import     'convert-excel-to-json'
//   const excelToJson = require('convert-excel-to-json');
export default {
data() {
    return {
      file: null,
      display_excel_datavue: null,
    } 
  },
    methods: {
        onChange(event) {
      this.file = event.target.files ? event.target.files[0] : null;
       
      alert('ok')
      this.upload()
    },
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
console.log('filename')
console.log(filename)
        var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
        if (extension == '.XLS' || extension == '.XLSX') {
            //Here calling another method to read excel file into json
            // excelFileToJSON(files[0]);
            console.log('excelFileToJSON114444')
            this.excelFileToJSON11(files);
            console.log('excelFileToJSON11555')
        }else{
            alert("Please select a valid excel file.");
        }
      },
       
      //Method to read excel file and convert it into JSON 
       excelFileToJSON11(file){
        console.log('excelFileToJSON11')
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
                //displaying the json result into HTML table
                this.displayJsonToHtmlTable(jsonData);
                }
            }catch(e){
                console.error(e);
            }
      },
       
      //Method to display the data in HTML Table
       displayJsonToHtmlTable(jsonData){
        // var table=document.getElementById("display_excel_data");
// var table=this.display_excel_datavue;
console.log('jsonData')
console.log(jsonData)

        if(jsonData.length>0){

            var htmlData='<tr><th>Student Name</th><th>Address</th><th>Email ID</th><th>Age</th></tr>';
            for(var i=0;i<jsonData.length;i++){
                var row=jsonData[i];
                htmlData+='<tr><td>'+row["Student Name"]+'</td><td>'+row["Address"]
                      +'</td><td>'+row["Email ID"]
                      +'</td><td>'
                      +row["Age"]
                       +'</td><td>'
                      +row["classroom"]                     
                      +'</td></tr>';
            }
            // table.innerHTML=htmlData;
            this.display_excel_datavue=htmlData;
        }else{
            // table.innerHTML='There is no data in Excel';
             this.display_excel_datavue='There is no data in Excel';
        }
      }

// excelToJson 


    },
    
}
</script>
<style lang="">
    
</style>