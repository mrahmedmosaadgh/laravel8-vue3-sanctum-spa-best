<template>
    <div>
         <div class="fixed p-2 top-0 right-0   bg-green-200">
             <button  v-if="datamsg"  @click="copyme(datamsg)"> {{copymsg}}</button>
             <p>{{datamsg}}</p>
             <!-- <p>datamsg:{{datamsg}}</p> -->
         </div>



             <button @click="loadusers('teacher')"> load users teacher</button>
       <p>connect</p>
       <!-- <p>dbteachers:{{dbteachers}}</p> -->
       <!-- <p>classnamesarray:{{classnamesarray}}</p> -->
       <!-- <p>myclassnames:{{myclassnames}}</p> -->
<!-- <Multiselect
  v-model="classnamesarraydb"
  :options="classnamesarray"
/> -->
       <!-- <p  v-for="(item,index) in dbteachers" :key="index" >{{item}}</p> -->
       <table class="tbl1">
           <thead>
               <tr  >
                   <th>N</th>
                   <th>class name</th>
                   <th>subject</th>
                   <th>teacher</th>

               </tr>
           </thead>
           <tbody>
               <tr  >
                <td>
            <Multiselect
    v-model="classnamesarraydb"
   mode="tags"
  :close-on-select="true"
  :searchable="true"
  :create-option="false"
  :max='1'
  :options="classnamesarray"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
 search: '   border-0 hvr-box-shadow-none focus-box-shadow-none   ',
}"
/>
 
                </td>
                   <!-- <td>{{index+1}}</td> -->
                   <!-- <td>{{item.classname}}</td> -->
                   <!-- v-for="(item,index) in myclassnames" :key="index" -->
<!-- <td>
    <select name="tt"  >
        <option v-for="(item,index) in dbteachers" :key="index" :value="item.id">{{item.namear}}</option>
    </select>
</td> -->
<td > <!-- mode="tags" -->
<tr v-for="(item,index) in dbteachers" :key="index" >
{{item.namear}}
</tr>


</td>

                   <!-- <td>{{item.namear}}</td>
                   <td>{{item.nameen}}</td>
                   <td>{{item.id}}</td> -->
               </tr>
           </tbody>
       </table>

    </div>
</template>
<script>
  import Multiselect from '@vueform/multiselect'

  export default {
    components: {
      Multiselect,
    },
    data() {
        return {
            // dbteachers datamsg
            dbteachers: '',
            datamsg: '',
            classnamesarray: [],
            classnamesarraydb: [],
            myclassnames: '',
            copymsg: 'copy',
            // property: 'value',
            // property: 'value',
            // property: 'value',
            // property: 'value',
            // property: 'value',
            // property: 'value',
        };
    },
    mounted(){this.loadteachers();this.loadclasses();},
    methods:{
    async   loadclasses(){
        let classnames
            // this.datamsg = "loading calsses ...";  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            classnames = res.data.message;
            this.myclassnames = res.data.message;
            // this.datamsg = "Done";  
            });
            } catch (e) {
            // this.datamsg = "data error";  
            }
        // setTimeout(() => this.datamsg = '', 5000);

        // this.alltxt=[]
        // this.alltxtorigin=[]
        for(var i = 0; i < classnames.length; i++){
                // let datain=[
                //         this.dbdataarray[i].id,
                //         this.dbdataarray[i].classname,
                //         this.dbdataarray[i].stage    ,
                //         this.dbdataarray[i].nameLong ,
                //         this.dbdataarray[i].notes1   ,
                //         ]
        // this.alltxt.push(datain);
        this.classnamesarray.push(classnames[i].classname);
        this.classnamesarraydb.push('');
        }
},//loadclasses


async   loadteachers(){//dbteachers datamsg
            this.datamsg = "loading teachers ...";  
            try{
            await axios.post("/api/users",{'usertype':'teacher'} )
            .then((res) => {
            this.dbteachers = res.data.message;
            this.datamsg = "Done";  
            });
            } catch (e) {
            this.datamsg = "data error";  
            }
        setTimeout(() => this.datamsg = '', 5000);

        // this.alltxt=[]
        // this.alltxtorigin=[]
        // for(var i = 0; i < this.dbdataarray.length; i++){
        //         let datain=[
        //                 this.dbdataarray[i].id,
        //                 this.dbdataarray[i].classname,
        //                 this.dbdataarray[i].stage    ,
        //                 this.dbdataarray[i].nameLong ,
        //                 this.dbdataarray[i].notes1   ,
        //                 ]
        // this.alltxt.push(datain);
        // this.alltxtorigin.push(datain);
        // }
},//loadteachers

async   loadusers(usertype){//dbteachers datamsg
            this.datamsg = "loading "+usertype+" ...";  
            try{
            await axios.post("/api/users",{'usertype':usertype} )
            .then((res) => {
            this.dbteachers = res.data.message;
            this.datamsg = usertype +" Done";  
            });
            } catch (e) {
            this.datamsg = "data error";  
            }
        setTimeout(() => this.datamsg = '', 5000);

        // this.alltxt=[]
        // this.alltxtorigin=[]
        // for(var i = 0; i < this.dbdataarray.length; i++){
        //         let datain=[
        //                 this.dbdataarray[i].id,
        //                 this.dbdataarray[i].classname,
        //                 this.dbdataarray[i].stage    ,
        //                 this.dbdataarray[i].nameLong ,
        //                 this.dbdataarray[i].notes1   ,
        //                 ]
        // this.alltxt.push(datain);
        // this.alltxtorigin.push(datain);
        // }
},//loadteachers

    }
    
}
</script>
<style src="@vueform/multiselect/themes/default.css"></style>