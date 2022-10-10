<template>
    <div>
<div style="z-index:9999999" v-if="loading" class="overlay_fullscrren   "><div class="overlay_fullscrren  bg-black  z-50 "></div> <div class="bg_loading  overlay_fullscrren  z99999 z-50"> </div></div>
<!-- <div v-if="loading" class="overlay_fullscrren  bg-black z-50 "> <div class="bg_loading overlay_fullscrren z99999 z-50"></div></div> -->
<!-- <img src="'/img/loadingev.svg'" alt=""> -->
        Laravel8Vue3SanctumSpaBest3MarksSetup'
        <p><button @click="tble_MarksSetup_fromdb()">MarksSetup</button></p>
        <p><button @click="updatedata_fun()">updatedata_fun------------</button></p>
        <p>datadb:{{datadb}}</p>
        <p>datadb2:{{datadb2}}</p>
  <!-- t_head=[], -->
         <!-- t_body=[], -->
         <p>{{t_head_custom}}</p>
         <!-- <select  v-model="t_head_custom" multiple>
            <option v-for="item in t_head" :key="item" :value="item">{{item}}</option>
         </select> -->
<p>t_head_xls_sub_ar:{{t_head_xls_sub_ar}}</p>
<p>t_head_xls_sub_en:{{t_head_xls_sub_en}}</p>
         <p>
                                        <Multiselect
 v-model="t_head_xls_sub_en"
 v-if="t_head_xls!=null"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="true"
  :options="t_head_xls.keys1"
/>
                                        <Multiselect
 v-if="t_head_xls!=null"
 v-model="t_head_xls_sub_ar"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="true"
  :options="t_head_xls.keys2"
/>
         </p>
         <div class="tg-wrap" v-if="t_head != null">
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
                     <tr class="tr1" v-for="(item, index) in datadb" :key="index">
                         <td :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                             {{ index + 1 }}
                         </td>
 
                         <td
                          v-for="(item2, in2) in t_head" :key="in2"
                          :class="index % 2 == 0 ? 'td-tg1' : 'td-tg2'">
                             {{ item[`${item2}`] }} <input type="text" v-model="datadb[index][`${item2}`]">

   <!-- v-model="datadb[index][`${item2}`]" -->




                            <!-- <Multiselect
     v-model="datadb[index][`${item2}`]"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"

  :options="t_head"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
 search: '   border-0 hvr-box-shadow-none focus-box-shadow-none   ',
}"
/><Multiselect> -->


                         </td>

                     </tr>
                     <tr><td>        <p><button @click="updatedata_fun()">updatedata_fun------------</button></p></td></tr>
                 </tbody>
             </table>
         </div>
 

    </div>
</template>

<script>
import Multiselect from '@vueform/multiselect'


export default {
    name: 'Laravel8Vue3SanctumSpaBest3MarksSetup',
    components: {
      Multiselect,
    },
    props : ['t_head_xls'],
    data() {
        return {
            datadb:null,loading:false,t_head:null,t_head_custom:null,t_head_xls_sub_en:null,t_head_xls_sub_ar:null,t_head_xls_tbl1:null,t_head_xls_tbl2:null,           datadb2:null,
            col_head:[
'school_id'   ,
'name'        ,
'term'        ,
'year'        ,
'subcount'    ,
'array_sub'   ,
'array_max'   ,
'array_min'   ,
'array_msg'   ,
'search_field',
'lang'        ,
'notes'       ,

            ]
        };
    },

    mounted() {
        
    },

    methods: {
        async   updatedata_fun(){
                    this.loading = true;  
                    try{
                    await axios.post("/api/marks/update_MarksSetup",this.datadb )
                    .then((res) => {
                    this.datadb2 = res.data.data;
                    console.log(res.data.data);
                    
                                        this.t_head = Object.keys(this.datadb[0]);
                    this.loading = false;
                    });
                    } catch (e) {
                    console.log(e);
                                        this.loading = false;
                    // alert(e.response.status);
                    }

                  },//fromdbfun
        async   tble_MarksSetup_fromdb(){
                    this.loading = true;  
                    try{
                    await axios.post("/api/marks/get_MarksSetup" )
                    .then((res) => {
                    this.datadb = res.data.data;
                                        this.t_head = Object.keys(this.datadb[0]);
                                        
                    this.loading = false;
                    });
                    } catch (e) {
                    console.log(e);
                                        this.loading = false;
                    // alert(e.response.status);
                    }

                  },//fromdbfun

    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
