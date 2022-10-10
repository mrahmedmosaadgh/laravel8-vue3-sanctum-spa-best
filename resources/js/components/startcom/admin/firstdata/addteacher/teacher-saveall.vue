<template>
  <div>
<input type="text" v-model="newdata[1]"> <br>
<input type="text" v-model="newdata[2]"> <br>
<input type="text" v-model="newdata[3]"> <br>
<input type="text" v-model="newdata[4]"> <br>
<input type="text" v-model="newdata[5]"> <br>
<button @click="create()">save new</button>
            <Multiselect
    v-model="classnamesarraydb"
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
 -----------------------------------------------------
 <div class="fixed p-2 top-0 right-0   bg-green-200">
<span>{{datamsg}}</span>
</div>


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
        value: null,
        value2: null,
        options1: [
          'Batman',
          'Robin',
          'Joker',
        ],
        options2:[
    { value: 'batman', label: 'Batman' },
    { value: 'robin', label: 'Robin' },
    { value: 'env', label: 'en' },
    { value: 'arv', label: 'ar' },
    { value: 'joker', label: 'Joker' },
  ],



                          dbcolnamesarray     :[  `id`, `schoolgroup_id`, `school_id`, `teacher_id`, `stage`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
                        dbcolnamesarray_edit:[  `id`, `stage`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
                        alltxt              :[],
                        alltxtorigin        :[],
                        classnamesarray     :[],
                        classnamesarraydb     :[],
                        datamsg:'',
                        newdata:[
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',],                       
                        newdatadb:{
             'id'            :'',
             'schoolgroup_id':'1',
             'school_id'     :'1',
             'teacher_id'    :'1',
             'namear'        :'dfdfdddd',
             'nameen'        :'www',
             'subjects'      :'wqe',
             'classes'       :'we',
             'stage'         :'er',
             'notes1'        :'re',
             'notes2'        :'er',
             'notes3'        :'wer',
             'created_at'    :'er',
             'updated_at'    :'ewr',

},
      } 
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
        setTimeout(() => this.datamsg = '', 5000);

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
        setTimeout(() => this.datamsg = '', 5000);

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


        setTimeout(() => this.datamsg = '', 5000);

},

 
  } }
</script>


<style src="@vueform/multiselect/themes/default.css"></style>