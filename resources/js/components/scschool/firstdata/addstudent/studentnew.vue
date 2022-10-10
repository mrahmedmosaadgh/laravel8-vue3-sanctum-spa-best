<template>
  <div>
 <div class="fixed p-1   top-0 right-0   bg-green-200">
            <button v-if="datamsg" @click="copyme(datamsg)"> {{copymsg}}</button>
   {{datamsg}}
 </div>

    <!-- <span class="white-text-with-blue-shadow" >{{newdata[1]}}</span> -->
{{datatodb}}
<div class="  w-full   ">
    <div class="form-group mb-6   w-full  sm:w-1/2"
    v-for="(item,index ) in datatodb" :key="index"
    >
      <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">{{colnamesusers[index]}}</label>
      <input type="text"
      class="form-control
        block
        w-full"
      
       :placeholder="'Enter ' +colnamesusers[index]" v-model="datatodb[index]">
      <small id="emailHelp" class="block mt-1 text-xs text-gray-600">
        <!-- We'll never share your email with anyone
        else. -->
        </small>
    </div>
</div>




<!-- <input type="text" v-model="datatodb[1]"> <br>
<input type="text" v-model="datatodb[2]"> <br>
<input type="text" v-model="datatodb[3]"> <br>
<input type="text" v-model="datatodb[4]"> <br>
<input type="text" v-model="datatodb[5]"> <br> -->
<button @click="createone()" class="white-text-with-blue-shadow">save new</button>
            <!-- <Multiselect
              v-model="classnamesarraydb"
              mode="tags"
              :close-on-select="false"
              :searchable="true"
              :create-option="false"
              :options="classnamesarray"
              :classes="{
                container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
                tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
                }" /> -->

 -----------------------------------------------------



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
              copymsg:'copy',
              datamsg:'',
              // colnamesusers:[
              //         'schoolgroup_id',
              //         'school_id'     ,
              //         'usertype'      ,
              //         'nid'           ,
              //         'nameen'        ,
              //         'namear'        ,
              //         'classname'     ,
              //         'parent_id'     ,
              //         'notes1'        ],
              colnamesusers:[
                      'nid'           ,
                      'usertype'      ,
                      'nameen'        ,
                      'namear'        ,
                      'classname'     ,
                      'notes1'        ],
              datatodb     :[
                      'nid'           ,
                      'student'      ,
                      'nameen'        ,
                      'namear'        ,
                      'classname'     ,
                      'notes1'        ],

                       newdatadb:{
                            'nid'      :'',
                            'usertype' :'',
                            'nameen'   :'',
                            'namear'   :'',
                            'classname':'',
                            'notes1'   :''},




       
      } 
    },


mounted(){this.loadteachers();this.loadclasses();},
// computed:{
// clearmsg(){
// if (this.datamsg.length>0) {
// setTimeout(() => this.datamsg = '', 5000);
// }

// }
// },
watch: {
    // // whenever question changes, this function will run
    // question(newQuestion, oldQuestion) {
    //   if (newQuestion.indexOf('?') > -1) {
    //     this.getAnswer()
    //   } }},
    datamsg() {
if (this.datamsg.length>0) {
setTimeout(() => this.datamsg = '', 5000);
}
      
      }},


methods:{
copyme(txt) {
navigator.clipboard.writeText(JSON.stringify( txt))
this.copymsg='copied!'
//  setTimeout(() => this.copymsg = 'Copy', 2000);

},
async   createone(){
this.datamsg = 'saving student ...';

  let mydata={
    'datatodb'         :this.datatodb,
    'colnamesusers':this.colnamesusers}
console.log(mydata);
// return

  try{
 await axios.post('/api/student/createone',mydata)
//  await axios.post('/api/student/createone',mydata)
.then((res) => {
    this.datamsg =res.data.message;
});
} catch (e) {
this.datamsg = 'data error';
}
//setTimeout(() => this.datamsg = '', 5000);
},








    async   loadclasses(){
        let classnames
            // this.datamsg = "loading calsses ...";  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            classnames = res.data.message;
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
        }
},//loadclasses


async   loadteachers(){
            this.datamsg = "loading teachers ...";  
            try{
            await axios.post("/api/teacher/all" )
            .then((res) => {
            this.dbdataarray = res.data.message;
            this.datamsg = "Done";  
            });
            } catch (e) {
            this.datamsg = "data error";  
            }
        // setTimeout(() => this.datamsg = '', 5000);

        this.alltxt=[]
        this.alltxtorigin=[]
        for(var i = 0; i < this.dbdataarray.length; i++){
                let datain=[
                        this.dbdataarray[i].id,
                        this.dbdataarray[i].classname,
                        this.dbdataarray[i].stage    ,
                        this.dbdataarray[i].nameLong ,
                        this.dbdataarray[i].notes1   ,
                        ]
        this.alltxt.push(datain);
        this.alltxtorigin.push(datain);
        }
},//loadteachers

async saveall(){
            this.datamsg = "saving teachers ...";  
            try{
            await axios.post("/api/teacher/updateall",{data:this.alltxt})
            .then((res) => {
                this.datamsg =res.data.message;
            });
            } catch (e) {
            this.datamsg = "data error";
            }
        // setTimeout(() => this.datamsg = '', 5000);

},

async create(){
            this.datamsg = "saving teachers ...";  
let datatodb=[];
// this.classnamesarraydb
this.newdatadb={
             'id'            :this.newdata[1],
             'schoolgroup_id':this.newdata[2],
             'school_id'     :this.newdata[3],
             'teacher_id'    :this.newdata[4],
             'namear'        :this.newdata[5],
             'nameen'        :this.newdata[6],
             'subjects'      :this.newdata[7],
             'classes'       :this.classnamesarraydb,
             'stage'         :this.newdata[9],
             'notes1'        :this.newdata[10],
            //  'notes2'        :this.dbcolnamesarray_edit[11],
            //  'notes3'        :this.dbcolnamesarray_edit[12],
            //  'created_at'    :this.dbcolnamesarray_edit[13],
            //  'updated_at'    :this.dbcolnamesarray_edit[14],

}

console.log(this.newdatadb)
console.log(this.newdatadb.classes)
// return

            // for (let index = 0; index < this.dbcolnamesarray_edit.length; index++) {
                 
            //      datatodb[index]
                 
            //      let element = {
            //        [ this.dbcolnamesarray_edit[index] ]: this.newdata[index]};

            //     datatodb.push(element);
            // }
            // console.log(datatodb)
            // console.log(this.dbcolnamesarray_edit[1])



            // return
            try{
            await axios.post("/api/teacher/createone",this.newdatadb)
            .then((res) => {
                this.datamsg =res.data.message;
            });
            } catch (e) {
            this.datamsg = "data error";
            }


        // setTimeout(() => this.datamsg = '', 5000);

},

 
  } }
</script>


<style src="@vueform/multiselect/themes/default.css">

</style>
