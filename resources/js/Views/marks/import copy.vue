<template>
    <div>


        <!-- <marksSetup :t_head_xls="t_head_xls">marks_setup err</marksSetup> -->

  <p><input type="file" id="file_upload" @change="onChange" /><button @click="onChange()">onChange</button></p>

<p>datadb:<button @click="import_to_dbfun()">Upload</button></p>
<p>pagenum:<input type="number" v-model="pagenum"></p>


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
                        <button @click="pagenum=0">first</button>
                        <button @click="pagenum=1">2</button>
                        <button @click="pagenum=2">3</button>
                        <button @click="pagenum=3">4</button>
                        <button @click="pagenum=4">5</button>
                        <button @click="pagenum=5">6</button>
                        <button @click="pagenum=6">7</button>
                        <button @click="pagenum=7">8</button>
                        <button @click="pagenum=8">9</button>
                        <button @click="pagenum=9">10</button>
                        <button @click="pagenum=~~(t_body2.length/10)">last</button>
                        <svg   @click="pagenum=~~(t_body2.length/10)" class=" cursor-pointer hover:fill-lime-400 fill-lime-600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill='red' version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 122.883 122.882" enable-background="new 0 0 122.883 122.882" xml:space="preserve"><g><path d="M61.441,0L61.441,0l0.001,0.018c16.974,0,32.335,6.872,43.443,17.98s17.98,26.467,17.98,43.441h0.018v0.002l0,0h-0.018 c0,16.976-6.873,32.335-17.98,43.443c-11.109,11.107-26.467,17.979-43.442,17.979v0.018h-0.002l0,0v-0.018 c-16.975,0-32.335-6.872-43.443-17.98C6.89,93.775,0.018,78.417,0.018,61.442H0v-0.001V61.44h0.018 c0-16.975,6.872-32.334,17.98-43.443C29.106,6.89,44.465,0.018,61.44,0.018L61.441,0L61.441,0L61.441,0z M71.701,42.48 c1.908-1.962,1.863-5.101-0.098-7.009c-1.963-1.909-5.102-1.865-7.01,0.097L42.755,58.088l3.553,3.456l-3.568-3.46 c-1.911,1.971-1.863,5.118,0.108,7.029c0.058,0.056,0.116,0.109,0.175,0.162l21.571,22.057c1.908,1.962,5.047,2.006,7.01,0.097 c1.961-1.908,2.006-5.047,0.098-7.01L53.227,61.529L71.701,42.48L71.701,42.48z"/></g></svg>
                        <button @click="pagenum++">+</button>
                        <button @click="pagenum--">-</button>
                     <input type="text" @change="filtertbl2fun()" v-model="filtertbl2">
                     {{filtertbl2}}
                     
                     </p>

        </div>
                     <!-- <svg  width="22px" height="22px"  class=" cursor-pointer hover:fill-lime-400  active:fill-lime-900 fill-lime-600"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 100.11" style="enable-background:new 0 0 122.88 100.11" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><polygon class="st0" points="122.88,49.67 57.34,100.11 57.34,55.97 0,100.11 0,0 57.34,43.46 57.34,0 122.88,49.67"/></g></svg> -->
        ----------------------------33333---------------------------
  
  <!-- <svg  width="22px" height="22px"  class=" cursor-pointer hover:fill-lime-400  active:fill-lime-900 fill-lime-600" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 346 512.73"><path fill-rule="nonzero" d="M315.38 3.95 7.71 241.08a19.186 19.186 0 0 0-3.76 3.67c-6.39 8.29-4.87 20.21 3.42 26.6L314.21 507.8c3.37 3.06 7.85 4.93 12.76 4.93 10.51 0 19.03-8.52 19.03-19.03V18.96h-.06c0-4.05-1.29-8.14-3.96-11.59-6.4-8.29-18.31-9.81-26.6-3.42z"/></svg>
  <svg  width="22px" height="22px"  class=" cursor-pointer hover:fill-lime-400  active:fill-lime-900 fill-lime-600" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 346.02 512.76"><path fill-rule="nonzero" d="M338.31 241.09 30.62 3.95c-8.29-6.39-20.2-4.87-26.6 3.42A18.905 18.905 0 0 0 .06 18.96H0v474.77c0 10.51 8.52 19.03 19.03 19.03 4.91 0 9.39-1.87 12.77-4.93l306.85-236.46c8.29-6.4 9.81-18.32 3.41-26.6-1.1-1.43-2.36-2.66-3.75-3.68z"/></svg> -->
<i class="fa-solid fa-stapler"></i>

<div class="text-center" v-if="t_body3==null">no data</div>
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






 

<p><i class="fa-brands fa-facebook bg-orange-400 ">oo</i></p>

<i class="fa-solid fa-xmark   svgbtn "></i>
<i class="fa-solid fa-xmark    svgbtnred   fa-xl mx-4"></i>
<i class="fa-solid fa-xmark    svgbtnred   fa-2xl "></i>
<i class="fa-solid fa-arrow    svgbtnred   fa-2xl "></i>
<i class="fa-solid fab fa-amazon    svgbtnred   fa-2xl  fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i>
<i class="fa-solid fas fa-bell    svgbtnred   fa-2xl  fa-beat" style="--fa-animation-duration: 0.5s;"></i>
  <i class="fa-solid fa-circle-info fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;" ></i>
<div class="fa-3x">
  <i class="fa-solid fa-basketball fa-bounce"></i>
  <i class="fa-solid fa-volleyball fa-bounce"></i>

  <!-- bounce animation with no "squish" -->
  <i class="fa-solid fa-frog fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; " ></i>

  <!-- bounce animation with no "squish" or "rebound" -->
  <i class="fa-solid fa-envelope fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;" ></i>
</div>



<div class="fa-3x">
  <i class="fa-solid fa-bell fa-shake"></i>
  <i class="fa-solid fa-lock fa-shake"></i>
  <i class="fa-solid fa-stopwatch fa-shake"></i>
  <i class="fa-solid fa-bomb fa-shake"></i>
</div>

<div class="fa-3x">
  <i class="fa-solid fa-sync fa-spin"></i>
  <i class="fa-solid fa-circle-notch fa-spin"></i>
  <i class="fa-solid fa-cog fa-spin"></i>
  <i class="fa-solid fa-cog fa-spin fa-spin-reverse"></i>
  <i class="fa-solid fa-spinner fa-spin-pulse"></i>
  <i class="fa-solid fa-spinner fa-spin-pulse fa-spin-reverse"></i>
</div>

<div class="flex flex-wrap">
<div class="fa-3x box effect2">
  <i class="fa-solid fa-cog fa-spin"></i>
  <i class="fa-solid fa-cog fa-spin" style="--fa-animation-direction: reverse;" ></i>
  <i class="fa-solid fa-cog fa-spin" style="--fa-animation-duration: 15s;"></i>
  <i class="fa-solid fa-compact-disc fa-spin" style="--fa-animation-duration: 30s; --fa-animation-iteration-count: 1;"></i>
  <i class="fa-solid fa-tire fa-spin" style="--fa-animation-duration: 3s; --fa-animation-iteration-count: 5;--fa-animation-timing: ease-in-out;"></i>
</div>


<div class=" box effect2">
  <i class=" fa-10x fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid  fa-angle-left  fa-shake"></i>
  <i class="fa-solid fa-angles-left  fa-shake"></i>
  <i class="fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid fas fa-angles-right  fa-shake"></i>
  <i class="fa-solid fas fa-clone  fa-shake"></i>
  <i class="fa-solid fas fa-paste  fa-shake"></i>
  <i class="fa-solid  fab fa-creative-commons-share fa-shake"></i>
</div>


<div class=" box effect2">
  <i class=" fa-10x fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid  fa-angle-left  fa-shake"></i>
  <i class="fa-solid fa-angles-left  fa-shake"></i>
  <i class="fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid fas fa-angles-right  fa-shake"></i>
  <i class="fa-solid fas fa-clone  fa-shake"></i>
  <i class="fa-solid fas fa-paste  fa-shake"></i>
  <i class="fa-solid  fab fa-creative-commons-share fa-shake"></i>
</div>


<div class=" box effect2">
  <i class=" fa-10x fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid  fa-angle-left  fa-shake"></i>
  <i class="fa-solid fa-angles-left  fa-shake"></i>
  <i class="fa-solid fa-angle-right  fa-shake"></i>
  <i class="fa-solid fas fa-angles-right  fa-shake"></i>
  <i class="fa-solid fas fa-clone  fa-shake"></i>
  <i class="fa-solid fas fa-paste  fa-shake"></i>
  <i class="fa-solid  fab fa-creative-commons-share fa-shake"></i>
</div>




</div> <!-- ref="audio"   hidden="true"-->
<p>ww
    <!-- <video loop muted autoplay id="videomain">
  <source src="/mp3/p.mp3" type="video/mp4">
</video>
  -->
    
    
    ww</p>               
             <button @click="p()">play</button>
  <av-bars
 
    audio-src="/mp3/p.mp3">
  </av-bars>

 
 <!-- :media="mediaObject" -->

   <!-- <AudioPlayer 
  
   
   :option="{
        src: '/mp3/p.mp3',
        title: 'your-audio-title',
        autoplay:true
       
   }" />  -->
   
   
   <!-- coverImage: 'https://your-cover-image.png', -->

<p>datadb:{{datadb}}</p>

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

    created() {
// this.player.scr='/mp3/p.mp3'
// this.player.muted
// this.player.muted="false"

    },
//     computed:{
// filtertbl2fun(){
//     this.t_body2.filter(([key, value]) => typeof value === this.filtertbl2)
//     return filtertbl2
// }
//     },

    methods: {
        p(){
            this.player.scr='/mp3/p.mp3'
this.player.muted
this.player.muted="false"
            //  this.player.muted = true
            //  this.player.muted = false
            this.player.play()
        },
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
            // this.t_body3 = this.t_body2[index]
            console.log(element);
            console.log(element['student_id']);
            console.log(this.filtertbl2);
            console.log(this.t_body2[index]);
            
        }

    });

if (ttt==null) {
this.t_body3 =null
} else {
this.t_body3 = ttt
}


//     this.t_body2 = this.t_body2.filter(function ([key, value]) {
//         return  value == this.filtertbl2 ;
// //   return key == "student_id" && value == this.filtertbl2 ;
// });
        console.log(this.t_body2);

// const filteredArr = scoreArr.filter(function ([key, value]) {
//   return key !== "Jack";
// });


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

// console.log(jsonData[0]);
// console.log(jsonData[1]);
// // console.log(jsonData[2]);
// console.log(Object.values(jsonData[0]));

                    this.t_head = Object.keys(jsonData[0]);
                    this.t_headd = Object.values(jsonData[0]);


                    this.t_head2 = Object.keys(jsonData2[0]);
                    this.t_headd2 = Object.values(jsonData2[0]);

                    // this.t_head_xls=
                    // {

                    //     'suben':Object.keys(jsonData[0]),
                    //     'subar':Object.values(jsonData[0]),
                    // }

                    this.t_body = jsonData;
                    this.t_body2 = jsonData2;
// this.totalpagenum=

                };
            } catch (e) {
                console.error(e);
            }
        },
        // -----------------------------------------------------------------
            async   import_to_dbfun(){ 
                        // this.loading = true;  
                        try{
                        await axios.post("/api/marks/import" ,this.t_body)
                        .then((res) => {
                        this.datadb = res.data;
                        // this.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        // alert(e.response.status);
                        }
                      },//import_to_dbfun
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>