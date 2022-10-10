<template>
    <div>
        schoolmarksout main
        {{ $route.path }}
        import marks from excel sheet

        <p><input type="file" id="file_upload" @change="onChange" /></p>
        <p><button @click="onChange()">Upload</button></p>
        <p><button @click="alert2()">alert2</button></p>

 
        <p>t_head:{{ t_head }}</p>
        <p v-if="t_head != null">t_head:{{ t_head[0] }}</p>


        <div class="tg-wrap" v-if="t_head != null" dir="rtl">
            <table class="tg">
                <thead>
                    <tr>
                        <th class="th-tg1">#</th>
                        <th
                            v-for="(item, index) in t_head"
                            :key="index"
                            class="th-tg1"
                        >
                            {{ item }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr1" v-for="(item, index) in t_body" :key="index">
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ index + 1 }}
                        </td>

                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[0]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[1]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[2]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[3]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[4]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[5]}`] }}
                        </td>
                        <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head[6]}`] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


 
quizq
<quizq>quizq err</quizq>




    </div>
</template>

<script>

import * as XLSX from "XLSX";
import quizq  from "./quizq.vue";
export default {
    name: "Laravel8Vue3SanctumSpaBest3Main",
components:{quizq},
    data() {
        return {
            file: null,
            t_head: null,
            t_body: null,
            display_excel_datavue: null,
        };
    },

    mounted() {},

    methods: {



        onChange(event) {
            this.file = event.target.files ? event.target.files[0] : null;
            var files = this.file;
            //   alert('ok')
            console.log("ok");
            console.log(files);
            if (files.length == 0) {
                alert("Please choose any file...");
                return;
            }

            var filename = files.name;
            // var filename = files[0].name;
            console.log("filename");
            console.log(filename);
            var extension = filename
                .substring(filename.lastIndexOf("."))
                .toUpperCase();
            if (extension == ".XLS" || extension == ".XLSX") {
                //Here calling another method to read excel file into json
                // excelFileToJSON(files[0]);
                console.log("excelFileToJSON114444");
                this.excelFileToJSON11(files);
                console.log("excelFileToJSON11555");
            } else {
                alert("Please select a valid excel file.");
            }
        },
        //Method to read excel file and convert it into JSON
        excelFileToJSON11(file) {
            console.log("excelFileToJSON11");
            try {
                var reader = new FileReader();
                reader.readAsBinaryString(file);
                reader.onload = (e) => {
                    var data = e.target.result;
                    var workbook = XLSX.read(data, {
                        type: "binary",
                    });
                    var result = {};
                    var firstSheetName = workbook.SheetNames[0]; //reading only first sheet data
                    var jsonData = XLSX.utils.sheet_to_json(
                        workbook.Sheets[firstSheetName]
                    );

                    this.t_head = Object.keys(jsonData[0]);
                    console.log(this.t_head);
                    console.log(this.t_head[0]);
                    console.log(this.t_head[1]);
                    console.log("n % 2");
                    console.log(5 % 2);
                    console.log(10 % 2 == 0);

                    // this.t_head=jsonData[0].keys();Object.keys(jsonData[0])
                    this.t_body = jsonData;

                    this.displayJsonToHtmlTable(jsonData); //displaying the json result into HTML table
                    console.log(jsonData);
                    console.log(this.displayJsonToHtmlTable(jsonData));
                };
            } catch (e) {
                console.error(e);
            }
        },
        //Method to display the data in HTML Table
        displayJsonToHtmlTable(jsonData) {
            // var table=document.getElementById("display_excel_data");
            // var table=this.display_excel_datavue;
            console.log("jsonData");
            console.log(jsonData);

            if (jsonData.length > 0) {
                var htmlData =
                    "<tr><th>Student Name</th><th>Address</th><th>Email ID</th><th>Age</th></tr>";
                for (var i = 0; i < jsonData.length; i++) {
                    var row = jsonData[i];
                    htmlData +=
                        "<tr><td>" +
                        row["Student Name"] +
                        "</td><td>" +
                        row["Address"] +
                        "</td><td>" +
                        row["Email ID"] +
                        "</td><td>" +
                        row["Age"] +
                        "</td><td>" +
                        row["classroom"] +
                        "</td></tr>";
                }
                // table.innerHTML=htmlData;
                this.display_excel_datavue = htmlData;
            } else {
                // table.innerHTML='There is no data in Excel';
                this.display_excel_datavue = "There is no data in Excel";
            }
        }, // excelToJson





fun1(){
    console.log('fun1');
    alert('fun1');
},
fun2(){
    console.log('fun1');
    alert('fun1');
},

       
       alert2(){

// this.$swal('Hello Vue world!!!  1');
// this.$swal.fire({
//   icon: 'error',
//   title: 'Oops...',
//   text: 'Something went wrong!',
//   footer: '<a href="">Why do I have this issue?</a>'
// })

this.$swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {

    this.$swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    this.$swal.fire('Changes are not saved', '', 'info')
  }
})




//     this.$swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   width:'180px',
//   title: 'Your work has been saved',
//   showConfirmButton: false,
//   timer: 1500
// })

// const Toast = this.$swal.mixin({
//   toast: true,
//   position: 'top-end',
//   showConfirmButton: false,
//   timer: 2000,
//   timerProgressBar: true,
//   didOpen: (toast) => {
//     toast.addEventListener('mouseenter', this.$swal.stopTimer)
//     toast.addEventListener('mouseleave', this.$swal.resumeTimer)
//   }
// })

// Toast.fire({
//   icon: 'success',
//   title: 'Signed in successfully'
// })


       },














    },
};
</script>

<style>

</style>
