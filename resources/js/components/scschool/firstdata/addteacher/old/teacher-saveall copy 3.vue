<template>
  <div>
 
 

<p>{{value}}</p>
<p>{{value2}}</p>
-----------------------------------------------------
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>teacher name</th>
        <th>subject1</th>
        <th>subject2</th>
        <th>subject3</th>
        <th>subject4</th>
        <th>subject5</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for=" (cl,index ) in alltxt" :key="index">
   
     <!-- @change="change(dbcolnamesarray_edit[1],cl[1],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][1]" 
           
            >
            <!-- change(col name,col data,col id data)" -->
            <p >{{cl[1]}} </p> 
        </td>
<!-- @change="change(dbcolnamesarray_edit[2],cl[2],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][2]" 
            
            >
            <p >{{cl[2]}} </p> 
        </td>
 <!-- @change="change(dbcolnamesarray_edit[3],cl[3],cl[0])" -->
        <td>
            <input type="text" v-model.lazy="alltxt[index][3]" 
           >
            <p >{{cl[3]}} </p> 
        </td>
    <!-- @change.passive -->
    </tr>
    <tr>
        <td>id</td>
        <td>namear</td>
        <td>nameen</td>
        <td>classes</td>
        <td>subject1</td>
        <td>subject2</td>
        <td>subject3</td>
        <td>subject4</td>
        <td>subject5</td>
        <td>notes</td>
    </tr>
    <tr>
        <!-- <td><input type="text" v-model="newdata[0]"></td>
        <td><input type="text" v-model="newdata[1]"></td>
        <td><input type="text" v-model="newdata[2]"></td> -->
        <td><input type="text" v-model="newdata[3]"></td>
        <td>
            <!-- <input type="text" v-model="newdata[4]"> -->
            <Multiselect
  v-model="newdata[4]"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"
  :options="classnamesarray"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
}"
/>
            
            
            </td>
        <td><input type="text" v-model="newdata[5]"></td>
        <td><input type="text" v-model="newdata[6]"></td>
        <td><input type="text" v-model="newdata[7]"></td>
        <td><input type="text" v-model="newdata[8]"></td>
        <td><button @click="create()">save new</button></td>
        <td><button @click="newdata=[,,,,,,,,,,,,,,,]">clear</button></td>
    </tr>
    </tbody>
</table>

{{classnamesarray}}
 -----------------------------------------------------
 <div class="fixed p-2   top-0 right-0   bg-green-200">
{{datamsg}}
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
                        datamsg:'',
                        newdata:[,,,,,,,,,,,,,,,],



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
            for (let index = 0; index < this.dbcolnamesarray_edit.length; index++) {
                 
                 datatodb[index]
                 
                 let element = {
                   [ this.dbcolnamesarray_edit[index] ]: this.newdata[index]};

                datatodb.push(element);
            }
            console.log(datatodb)
            console.log(this.dbcolnamesarray_edit[1])



            return
            try{
            await axios.post("/api/teacher/create",{
                'data':this.newdata,
                'colnames':this.dbcolnamesarray_edit
                })
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