<template>
    <div>


        <!-- <marksSetup :t_head_xls="t_head_xls">marks_setup err</marksSetup> -->
<p>
    <!-- <a
  :href="item.url"
  v-text="item.label"
  @click.prevent="downloadItem(item)" /> -->
    <a
  :href="url"
  v-text="'download'"
  @click.prevent="downloadItem({ url:'', label:'download' })" />
  
</p>
  <p><input type="file" id="file_upload" @change="onChange"  accept=" .xls,.xlsx, application/vnd.ms-excel" /></p>
  <!-- <p><input type="file" id="file_upload" @change="onChange"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" /></p> -->

<p><button @click="marks_xls_to_dbfun()">marks_xls_to_dbfun</button></p>

<p>MarksSetup_id:{{MarksSetup_id}}</p>
         <!-- <p><button @click="sortme()">sort</button></p> -->
<!-- ----------------22222------------------ -->

        <div class="tg-wrap" v-if="t_body != null" dir="rtl">
                                 <p class="flex">


<span  @click="pagenum=~~(t_body.length/10)" title="last"><i class="fa-solid fa-angles-right mx-4 svgbtn"></i></span>
<span  @click="(pagenum==~~(t_body.length/10))? '':pagenum++"                    title="+" ><i class="fa-solid fa-angle-right mx-4 svgbtn"></i>  </span>
<span class=" select-none">{{pagenum+1}}/{{~~(t_body.length/10+1)}}</span>
<span  @click="(pagenum==0)?'':pagenum--"                    title="-" ><i class="fa-solid fa-angle-left  mx-4  svgbtn"></i>      </span>
<span  @click="pagenum=0"                    title="first" ><i class="fa-solid fa-angles-left  mx-4  svgbtn"></i>      </span>
  
  
  
  


                     <input type="text" class=" border border-black " @change="filtertbl2fun()" v-model="filtertbl2">
                     <!-- {{filtertbl2}} -->
                     
                     </p>
            <table class="tg">
                <thead>
                     
                    <tr><th>#</th>
                        <th v-for="(head1, index) in t_head1" :key="index" class="th-tg1">
                        {{ head1}}</th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head2, index) in t_head2" :key="index" class="th-tg1">
                            {{ head2}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head3, index) in t_head3" :key="index" class="th-tg1">
                            {{ head3}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head4, index) in t_head4" :key="index" class="th-tg1">
                            {{ head4}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr1" v-for="(item, index) in t_body.slice(10*pagenum+3,11+10*pagenum)" :key="index">
                        <td 
                        
                        :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ 10*pagenum  + index+1 }}
                        </td>
                        <td  v-for="(item2, index2) in t_head1" :key="index2"
                        
                          :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                            {{ item[`${t_head1[index2]}`] }}

                        </td>
                    </tr>
                </tbody>
            </table>


        </div>


<!-- <div class="text-center" v-if="t_body != null && t_body3==null">result:0</div> -->
        <div class="tg-wrap" v-if="t_body != null && t_body3!=null" dir="rtl">

            <table class="tg">
                <thead>
                    <tr><th>#</th>
                        <th v-for="(head1, index) in t_head1" :key="index" class="th-tg1">
                        {{ head1}}</th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head2, index) in t_head2" :key="index" class="th-tg1">
                            {{ head2}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head3, index) in t_head3" :key="index" class="th-tg1">
                            {{ head3}}
                        </th>
                    </tr>
                    <tr><th>#</th>
                        <th v-for="(head4, index) in t_head4" :key="index" class="th-tg1">
                            {{ head4}}
                        </th>
                    </tr>


                </thead>
                <tbody>
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
            // player:new Audio(),
            file: null,
            MarksSetup_id: null,
            t_head1: null,
            t_head2: null,
            t_head3: null,
            t_head4: null,
            t_body: null,
            t_body3: null,
            filtertbl2: null,

            pagenum:0,
            totalpagenum:0,

            datadb:null,


        };
    },
    mounted() {
// this.tble_MarksSetup_fromdb()
this.MarksSetup_id=this.$cookies.get('MarksSetup_id')
    },

    methods: {


downloadItem ({ url, label }) {
    Axios.get(url, { responseType: 'blob' })
      .then(response => {
        const blob = new Blob([response.data], { type: 'application/pdf' })
        const link = document.createElement('a')
        link.href = URL.createObjectURL(blob)
        link.download = label
        link.click()
        URL.revokeObjectURL(link.href)
      }).catch(console.error)
  },












filtertbl2fun(){
    // this.t_body.filter(([key, value]) =>  value == this.filtertbl2)
    // this.t_body.filter(([key, value]) =>  key=='student_id', value == this.filtertbl2)
    // this.t_body.filter(([key, value]) => typeof value == this.filtertbl2)
    // return filtertbl2
    console.log(this.t_body);
    var ttt=null
    this.t_body.forEach((element,index) => {
        if (element['student_id']==this.filtertbl2) {
            ttt = this.t_body[index]
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


                    //     var secSheetName = workbook.SheetNames[1]; //reading only first sheet data
                    //                     var jsonData2 = XLSX.utils.sheet_to_json(
                    //     workbook.Sheets[secSheetName]
                    // );

                    this.t_head1 = Object.keys(jsonData[0]);
                    this.t_head2 = Object.values(jsonData[0]);
                    this.t_head3 = Object.values(jsonData[1]);
                    this.t_head4= Object.values(jsonData[2]);


                    // this.t_head2 = Object.keys(jsonData[0]);
                    // this.t_headd2 = Object.values(jsonData[0]);

                    this.t_body = jsonData;
                    // this.t_body = jsonData;


                };
            } catch (e) {
                console.error(e);
            }
        },
        // -----------------------------------------------------------------
            async   marks_xls_to_dbfun(){

// let text;
// if (!confirm("all data will be updated") == true) {
//   text = "You pressed OK!";
// } else {
//   text = "You canceled!";
// }
// let text;
if (!confirm("all data will be updated")) {return}

                    this.$store.state.loading = true;
                    //    var data={
                    //         page_setup:this.t_body,
                    //         page_marks:this.t_body,
                    //     }
                        // console.log( data);
                        try{
                        await axios.post("/api/marks/marks_xls_to_db" ,{data:this.t_body,id:this.MarksSetup_id})
                        .then((res) => {
                        this.datadb = res.data;
                        console.log( res.data);
                        this.$store.state.loading = false;
                        });
                        } catch (e) {
                        console.log(e);
                        }
                      },//marks_xls_to_dbfun
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>