<template>
    <div>

        <!-- <p><button @click="tble_MarksSetup_fromdb()">tble_MarksSetup_fromdb</button></p> -->
        <!-- <p><button @click="update_MarksSetup_fun()">update_MarksSetup_fun------------</button></p> -->
         
                                        <!-- <Multiselect
 v-if="t_head_xls!=null"
 v-model="t_head_xls_sub_ar"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="true"
  :options="t_head_xls.keys2"
/> -->

<!-- ------------------------------view from db -------------------- -->
           <!-- <table class='tbl1'>
             <thead>
               <tr>
                 <th>N</th>
                 <th>Name</th>
               </tr>
             </thead>
             <tbody>

               <tr v-for="(item,index) in t_head" :key='index'>
                 <td>{{index+1}}</td>
                 <td>
                   <p>{{item}}</p>
                 </td>
                 <td>

                 </td>
               </tr>
             </tbody>
           </table> -->



<!-- this.$store.getters.isLoggedIn <br>
{{this.$store.getters.isLoggedIn}} <br>
{{this.$store.state.user}}<br> -->
<!-- <button @click="this.$router.push('marks_search')">this.$router.push('marks_import')</button> -->





 MarksSetup_id:{{MarksSetup_id}}
 <!-- MarksSetup_id:{{$cookies.get('MarksSetup_id')}} -->
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
                         <th>marks


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
                             {{ item[`${item2}`] }}
                        </td>
                        <td class="flex">
                          <span @click="upload_MarksSetup_fun(item['id'])" ><i class="fas fa-upload fabtn-blue"></i></span>
                          
                          
                          <span @click="editme(item['id'])" ><i class="fas fa-pen fabtn-blue"></i></span>
                          <span @click="del_MarksSetup_fun(item['id'])" ><i class="fas fa-delete-left fabtn-red"></i></span>
                          
<!-- Show tooltip on hover -->


                        </td>
                        <!-- <td class=" border-0 bg-none" v-if="index==datadb.length-1"><span @click="addnewtableshow=!addnewtableshow" ><i class="fas fa-plus fabtn-blue"></i></span><button  @click="addnewtableshow=!addnewtableshow" type="">addnewtableshow</button> addnewtableshow:{{addnewtableshow}}</td> -->
                              <!-- <input type="text" v-model="datadb[index][`${item2}`]">@click="tble_MarksSetup_fromdb()" -->
<!-- <select v-if="t_head_xls.subar" v-model="t_head_xls.subar" >
<optionfas fa-paper-plane
v-for="(item,index) in t_head_xls.subar" :key="index"
 value="item"fas fa-pen
 >{{item}}</optionfas>
</select> -->
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
}"<i class="fa-sharp fa-solid fa-floppy-disk"></i>&& t_datanew.name
/><Multiselect> -->


                         

                     </tr>

                     <!-- <tr><td>        <p><button @click="update_MarksSetup_fun()">update_MarksSetup_fun------------</button></p></td></tr> -->
                 </tbody>
             </table>
             
             <form @submit.prevent="new_MarksSetup_fun()" method="post">
              <span @click="addnewtableshow=!addnewtableshow" ><i class="fas fa-plus fabtn-blue"></i></span>
             <table v-if="addnewtableshow" >
                     <tr class=" bg-white">
                      
                      
                      
                      <td></td>
                      <td ><input type="text" required class="w-full h-full m-0 p-2" v-model="t_datanew.name"></td>
                      <td ><input type="text" required class="w-full h-full m-0 p-2" v-model="t_datanew.term"></td>
                      <td ><input type="text" required class="w-full h-full m-0 p-2" v-model="t_datanew.year"></td>
                      <td ><input type="text" required class="w-full h-full m-0 p-2" v-model="t_datanew.lang"></td>
                      <td ><input type="text" required class="w-full h-full m-0 p-2" v-model="t_datanew.notes"></td>
                      <td >
                        <span @click="new_MarksSetup_fun()"  ><i class="fas fa-floppy-disk fabtn-blue"></i></span>
                      <button type="submit"></button>
                      

                      </td>





                     </tr>
             </table>
             </form>
             <!-- {{datadb}} <br> -->
             <!-- {{t_datanew}} -->
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

    data() {
        return {
            datadb:null,loading:false,addnewtableshow:false,MarksSetup_id:null,
            t_head:['name',	'term',	'year',	'lang'	,'notes'],
            t_datanew:{'name':'',	'term':'',	'year':'',	'lang'	:'En','notes':''},


        };
    },
// computed:{
// MarksSetup_id(){
//  return this.$cookies.get('MarksSetup_id')
// }
// },php artisan make:model Project -mc
// php artisan make:model Controlmark -mc
    mounted() {
      if (!this.$store.state.user.id) {
        this.$router.push('marks_login')
        return
      }
      // alert(this.$store.state.user.id)
this.tble_MarksSetup_fromdb()
this.MarksSetup_id=this.$cookies.get('MarksSetup_id')
    },

    methods: {
editme(id){

alert(id)
},


       upload_MarksSetup_fun(id){
        alert(this.$cookies.get('MarksSetup_id'))
this.$cookies.set('MarksSetup_id',id);
this.MarksSetup_id=this.$cookies.get('MarksSetup_id')
this.$router.push('marks_import')
       },

          async   del_MarksSetup_fun(id){

//             let text;
// if (confirm("Press a button!") == true) {
//   text = "You pressed OK!";
// } else {
//   text = "You canceled!";
// }


            if(!confirm('Are you sure?')){ return}
            // if(confirm('Are you sure?')==false){ return}

                    this.$store.state.loading = true;
                    try{
                    await axios.post("/api/marks/del_MarksSetup",{id:id})
                    .then((res) => {
                      console.log(res.data.data);
                      // return
                    this.datadb = res.data.data;
                    // this.t_head = Object.keys(this.datadb[0]);
                    this.$store.state.loading = false;
                    });
                    } catch (e) {
                    console.log(e);
                    this.$store.state.loading = false;
                    // alert(e.response.status);
                    }

    },//fromdbfun
    async   update_MarksSetup_fun(){
                    this.$store.state.loading = true;
                    try{
                    await axios.post("/api/marks/update_MarksSetup",this.datadb )
                    .then((res) => {
                    this.datadb2 = res.data.data;
                    console.log(res.data.data);
                    this.t_head = Object.keys(this.datadb[0]);
                    this.$store.state.loading = false;
                    });
                    } catch (e) {
                    console.log(e);
                    this.$store.state.loading = false;
                    // alert(e.response.status);
                    }

    },//fromdbfun
    async   new_MarksSetup_fun(){
      if(this.t_datanew.name=='' || this.t_datanew.term=='' ||this.t_datanew.year==''  ){return}
                    this.$store.state.loading = true;
                    try{
                    await axios.post("/api/marks/new_MarksSetup",this.t_datanew )
                    .then((res) => {
                    this.datadb = res.data.data;
                    console.log(res.data.data);
                    // this.t_head = Object.keys(this.datadb[0]);
                    this.$store.state.loading = false;
                    this.t_datanew={'name':'',	'term':'',	'year':'',	'lang'	:'En','notes':''}
                    });
                    } catch (e) {
                    console.log(e);
                    this.$store.state.loading = false;

                    // alert(e.response.status);
                    }

    },//fromdbfun
        async   tble_MarksSetup_fromdb(){
                    this.$store.state.loading = true;
                    try{
                    await axios.post("/api/marks/get_MarksSetup" )
                    .then((res) => {
                    this.datadb = res.data.data;
                    console.log(res.data);

                    this.$store.state.loading = false;
                    return
                                        this.t_head = Object.keys(this.datadb[0]);

                    
                    });
                    } catch (e) {
                    console.log(e);
                                        this.$store.state.loading = false;
                    // alert(e.response.status);
                    }

                  },//fromdbfun

    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
