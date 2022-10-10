<template>
    <div>
test-saveall
<button @click="saveall()">saveall</button>

<p>
    {{dbdataarray}}
</p>
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
        <td><input type="text" v-model="newdata[0]"></td>
        <td><input type="text" v-model="newdata[1]"></td>
        <td><input type="text" v-model="newdata[2]"></td>
        <td><input type="text" v-model="newdata[3]"></td>
        <td><input type="text" v-model="newdata[4]"></td>
        <td><input type="text" v-model="newdata[5]"></td>
        <td><input type="text" v-model="newdata[6]"></td>
        <td><input type="text" v-model="newdata[7]"></td>
        <td><input type="text" v-model="newdata[8]"></td>
        <td><button @click="create">save new</button></td>
        <td><button @click="newdata=[,,,,,,,,,,,,,,,]">clear</button></td>
    </tr>
    </tbody>
</table>
<p>{{newdata}}</p>
<div class="fixed p-2   top-0 right-0   bg-green-200">
{{datamsg}}
</div>





list
<div>
   <Multiselect
  v-model="value"
  mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="true"
  :options="[
    { value: 'batman', label: 'Batman' },
    { value: 'robin', label: 'Robin' },
    { value: 'joker', label: 'Joker' },
  ]"
/> 
</div>






    </div>
</template>

<script>
import Multiselect from '@vueform/multiselect'

    export default {
            data() {
                return {
                        dbcolnamesarray     :[  `id`, `schoolgroup_id`, `school_id`, `teacher_id`, `stage`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
                        dbcolnamesarray_edit:[  `id`, `stage`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
                        alltxt              :[],
                        alltxtorigin        :[],
                        datamsg:'',
                        newdata:[,,,,,,,,,,,,,,,],


                };
            },
mounted(){this.loadteachers();},

methods:{

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

 
 components: {
      Multiselect,
    },
    data() {
      return {
        value: null,
        options: [
          'Batman',
          'Robin',
          'Joker',
        ]
      }
    }
  } }
</script>

<style src="@vueform/multiselect/themes/default.css">

input {
  width: 100%;
}
</style>
 