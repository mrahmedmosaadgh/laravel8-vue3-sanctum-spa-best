<template>
    <div>


        <!-- <marksSetup :t_head_xls="t_head_xls">marks_setup err</marksSetup> -->

  <p><input type="file" id="file_upload" @change="onChange" /></p>

<p><button @click="import_to_dbfun()">import_to_dbfun</button></p>



        <div class="tg-wrap" v-if="t_body != null" dir="rtl">
            <table class="tg">
                <thead>
                    <tr>
                        <th class="th-tg1">#</th>

                        <th
                         v-for="(head, index) in t_head" :key="index"

                            class="th-tg1"
                        >
                            {{ head}}

                        </th>
                    
                    </tr>
                    <tr>
                        <th class="th-tg1">#</th>
                        <th
                         v-for="(head, index) in t_headd" :key="index"

                            class="th-tg1"
                        >

                            {{ head}}
                        </th>
                    
                    </tr>
                    
                </thead>
                <tbody>
                    <tr class="tr1" v-for="(item, index) in t_body.slice(1)" :key="index">
                        <td 
                        
                        :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ 20*pagenum  + index+1 }}
                        </td>
                        <td  v-for="(item2, index2) in t_headd" :key="index2"
                        
                          :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                           
  {{ item[`${t_head[index2]}`] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
<!-- ----------------22222------------------ -->

        <div class="tg-wrap" v-if="t_body2 != null" dir="rtl">
            <table class="tg">
                <thead>
                    <tr>
                        <th class="th-tg1">#</th>

                        <th
                         v-for="(head2, index) in t_head2" :key="index"

                            class="th-tg1"
                        >
                            {{ head2}}

                        </th>
                    
                    </tr>
                    <tr>
                        <th class="th-tg1">#</th>
                        <th
                         v-for="(head22, index) in t_headd2" :key="index"

                            class="th-tg1"
                        >

                            {{ head22}}
                        </th>
                    
                    </tr>
                    
                </thead>
                <tbody>
                    <tr class="tr1" v-for="(item, index) in t_body2.slice(10*pagenum+1,11+10*pagenum)" :key="index">
                        <td 
                        
                        :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ 10*pagenum  + index+1 }}
                        </td>
                        <td  v-for="(item2, index2) in t_head2" :key="index2"
                        
                          :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head2[index2]}`] }}

                        </td>
                    </tr>
                </tbody>
            </table>
                     <p class="flex">


<span  @click="pagenum=~~(t_body2.length/10)" title="last"><i class="fa-solid fa-angles-right mx-4 svgbtn"></i></span>
<span  @click="(pagenum==~~(t_body2.length/10))? '':pagenum++"                    title="+" ><i class="fa-solid fa-angle-right mx-4 svgbtn"></i>  </span>
<span class=" select-none">{{pagenum+1}}/{{~~(t_body2.length/10+1)}}</span>
<span  @click="(pagenum==0)?'':pagenum--"                    title="-" ><i class="fa-solid fa-angle-left  mx-4  svgbtn"></i>      </span>
<span  @click="pagenum=0"                    title="first" ><i class="fa-solid fa-angles-left  mx-4  svgbtn"></i>      </span>
  
  
  
  


                     <input type="text" @change="filtertbl2fun()" v-model="filtertbl2">
                     {{filtertbl2}}
                     
                     </p>

        </div>


<div class="text-center" v-if="t_body2 != null && t_body3==null">no data</div>
        <div class="tg-wrap" v-if="t_body2 != null && t_body3!=null" dir="rtl">

            <table class="tg">
                <thead>
                    <tr>
                        <!-- <th class="th-tg1">#</th> -->

                        <th
                         v-for="(head2, index) in t_head2" :key="index"

                            class="th-tg1"
                        >
                            {{ head2}}

                        </th>
                    
                    </tr>
                    <tr>
                        <!-- <th class="th-tg1">#</th> -->
                        <th
                         v-for="(head22, index) in t_headd2" :key="index"

                            class="th-tg1"
                        >

                            {{ head22}}
                        </th>
                    
                    </tr>
                    
                </thead>
                <tbody>
                    <!-- <tr class="tr1" v-for="(item, index) in t_body3" :key="index">
                        <td 
                        
                        :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ index+1 }}
                        </td>
                        <td  v-for="(item2, index2) in t_head2" :key="index2"
                        
                          :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item }}

                        </td>
                    </tr> -->
                            <!-- {{ item[`${t_head2[index2]}`] }} -->


                    <tr class="tr1">


                        <td 
                         v-for="(item, index) in t_body3" :key="index"
                        :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
{{ item }}

                        </td>
                    </tr>



                </tbody>
            </table>

                      
        </div>





<!-- <p>datadb:{{datadb}}</p> -->

    </div>
</template>

<script>


// import AudioPlayer from 'vue3-audio-player'
// import 'vue3-audio-player/dist/style.css'


 import Multiselect from '@vueform/multiselect'
import * as XLSX from "XLSX";
import marksSetup from "./marks_setup.vue"
export default {
    name: 'Laravel8Vue3SanctumSpaBest3Import',
    components: {
      Multiselect,marksSetup,
    //   AudioPlayer,
    },
    data() {
        return {
            player:new Audio(),
            file: null,
            t_head: null,
            t_head2: null,
            t_headd: null,
            t_headd2: null,
            t_body: null,
            t_body2: null,
            t_body3: null,
            filtertbl2: null,

            pagenum:0,
            totalpagenum:0,

            datadb:null,
// t_head_xls:null,


        };
    },


    methods: {

filtertbl2fun(){
    // this.t_body2.filter(([key, value]) =>  value == this.filtertbl2)
    // this.t_body2.filter(([key, value]) =>  key=='student_id', value == this.filtertbl2)
    // this.t_body2.filter(([key, value]) => typeof value == this.filtertbl2)
    // return filtertbl2
    console.log(this.t_body2);
    var ttt=null
    this.t_body2.forEach((element,index) => {
        if (element['student_id']==this.filtertbl2) {
            ttt = this.t_body2[index]
        }

    });

if (ttt==null) {
this.t_body3 =null
} else {
this.t_body3 = ttt
}

},
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
                // console.log("excelFileToJSON114444");
                this.excelFileToJSON11(files);
                // console.log("excelFileToJSON11555");
            } else {
                alert("Please select a valid excel file.");
            }
        },
                excelFileToJSON11(file) {
            // console.log("excelFileToJSON11");
            try {
                var reader = new FileReader();
                reader.readAsBinaryString(file);
                reader.onload = (e) => {
                    var data = e.target.result;
                    var workbook = XLSX.read(data, {
                        type: "binary",
                    });
                    // var result = {};
                    var firstSheetName = workbook.SheetNames[0]; //reading only first sheet data

                    var jsonData = XLSX.utils.sheet_to_json(
                        workbook.Sheets[firstSheetName]
                    );


                        var secSheetName = workbook.SheetNames[1]; //reading only first sheet data
                                        var jsonData2 = XLSX.utils.sheet_to_json(
                        workbook.Sheets[secSheetName]
                    );

                    this.t_head = Object.keys(jsonData[0]);
                    this.t_headd = Object.values(jsonData[0]);


                    this.t_head2 = Object.keys(jsonData2[0]);
                    this.t_headd2 = Object.values(jsonData2[0]);

                    this.t_body = jsonData;
                    this.t_body2 = jsonData2;


                };
            } catch (e) {
                console.error(e);
            }
        },
        // -----------------------------------------------------------------
            async   import_to_dbfun(){ 
                        this.loading = true;  
                       var data={
                            page_setup:this.t_body,
                            page_marks:this.t_body2,
                        }
                        console.log( data);
                        
                        try{
                        await axios.post("/api/marks/import" ,data)
                        .then((res) => {
                        this.datadb = res.data;
                        console.log( res.data);
                        this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        }
                      },//import_to_dbfun
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>