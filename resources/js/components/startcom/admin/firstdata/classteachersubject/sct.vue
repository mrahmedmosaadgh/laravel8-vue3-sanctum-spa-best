<template>
    <div>
        <!-- datamsg.length>0 -->
        <div
        :class="(animationMsg)?'animate__animated   animate__jello animate__animated animate__swing  ':' animate__animated  animate__flipOutX'"
          class="fixed p-2 top-0 right-0   bg-green-200">
            <span  ><span v-show="loading"  ><svg xmlns='http://www.w3.org/2000/svg' height='16' width='16' class='loadingsvg'><path d='M7 3V1s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z'/><path d='M4.63 4.1l-1-1.73S3.13 1.5 4 1c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.57-1.37-.37-1.37-.37z' fill-opacity='.93'/><path d='M3.1 6.37l-1.73-1S.5 4.87 1 4c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.86'/><path d='M3 9H1S0 9 0 8s1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.79'/><path d='M4.1 11.37l-1.73 1S1.5 12.87 1 12c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.72'/><path d='M3.63 13.56l1-1.73s.5-.87 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.65'/><path d='M7 15v-2s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z' fill-opacity='.58'/><path d='M10.63 14.56l-1-1.73s-.5-.87.37-1.37c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.5-1.37-.37-1.37-.37z' fill-opacity='.51'/><path d='M13.56 12.37l-1.73-1s-.87-.5-.37-1.37c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.44'/><path d='M15 9h-2s-1 0-1-1 1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.37'/><path d='M14.56 5.37l-1.73 1s-.87.5-1.37-.37c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.3'/><path d='M9.64 3.1l.98-1.66s.5-.874 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.23'/></svg></span></span>
            <span>{{datamsg}}</span>
        </div>
<div class="flex">
         <select name="select" size="10"   class=" w-32"
         v-model="classchoosed"
         >
             <option
             v-for="(item,index) in classes[1]" :key='index'
              :value="item">{{item}}</option>
         </select>


         <select name="select"
         v-model="subjectchoosed" size="10" multiple  class=" w-32"
         >
             <option
             v-for="(item,index) in subjects[1]" :key='index'
              :value="subjects[0][index]">{{item}}</option>
         </select></div>
<p>
    <button class="  animation-list animate__animated " @click="generateSubjectClass">generate subjects for every class</button>
</p>
<p>datamsg:{{datamsg}}</p>
<p>subjectchoosed:{{subjectchoosed}}</p>
<p>classchoosed:{{classchoosed}} </p>
 
<p v-for="(item,index) in subjectchoosed" :key="index">{{item}}:{{subjects[1][subjects[0].indexOf(item)]}}</p>
<!-- 

 -->


           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>class_id</th>
                       <th>subject</th>
                       <th>subject_id</th>
                       <th>teacher</th>
                       <th>teacher_id</th>
                       <th>periodcount</th>
<!-- { "class": -1, "class_id": -1, "subject": 1, "subject_id": 1, "teacher": "",
 "teacher_id": "", "periodcount": "" } -->
                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in sct" :key='index'>
                       <td>{{index+1}}</td>
                       <td>{{item.class}}</td>
                       <td>{{item.class_id}}</td>
                       <td>{{item.subject}}</td>
                       <td>
                           
                           
                           {{item.subject_id}}
                           
                           
                           </td>
                       <td>
                                    <select name="select" @click="sct[index].teacher_id=selectedteacher[index]"
                                    v-model="selectedteacher[index]"
                                    >
                                        <option
                                        v-for="(item,index) in teachers[0]" :key='index'
                                         :value="teachers[0][index]">{{teachers[1][index]}}</option>
                                    </select>

                           </td>
                       <td>{{item.teacher_id}}</td>
                       <td>
                                    <select name="select" @click="sct[index].periodcount=selectedpercount[index]"
                                    v-model="selectedpercount[index]"
                                    >
                                        <option 
                                        
                                        
                                        v-for="(item,index) in 20" :key='index'
                                         :value="item"
                                         :selected="item==selectedpercountdefault"
                                         >{{item}}
                                         
                                         
                                         </option>
                                    </select>
                           
                           
                           
                           {{item.periodcount}}</td>


                   </tr>
               </tbody>
           </table>











 

    <button @click="savesct">save</button>
    </div>
</template>
<script>


export default {
    data() {
        return {
            datamsg: '',
            datamsg2: '',
            loading:false,
            animationMsg:true,

            classchoosed: [],

            subjectchoosed:[],
            subjectsarray: [],
sct: [],
            classes: [],//0id 1name
            subjects: [],//0id 1name 2namecut
            teachers: [],
            selectedteacher: [],
            selectedpercount: [],
            selectedpercountdefault: 5,
        };
    },
mounted() {
this.loadclasses()
this.loadsubjects()
this.loadteachers()
    },
watch: {
    datamsg() {
        this.animationMsg=true 
//         var txt=this.datamsg
        
//  this.datamsg = txt
        
        
        if (this.datamsg.length>0) {
           
        setTimeout(() => this.animationMsg = false, 5000)
        //  this.datamsg = ''
                // setTimeout(() => this.datamsg = '', 5900);
        }
            
      }},
// computed:{

// com(){
// return value

//   },
   methods: {
       offmsg(){
// this.datamsg = ''
 this.loading=false
       },
async   loadclasses(){
            this.datamsg = 'loadclasses ...';
            this.loading = true;
            var datadb
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            datadb = res.data.message;
            this.datamsg = 'loadclasses ...Done';

            });
            } catch (e) {
            // console.log(e);
            this.datamsg = 'loadclasses ...error';
            // this.datamsg = "data error";
            alert("loadclasses data error");
            alert(e.response.status);
            }


 
var array0=[]//class id
var array1=[]//class name
var array2=[]//class namecut
this.classes=[]
for(var i = 0; i < datadb.length; i++){

  array0.push(datadb[i].id);//class id
//   array1.push('');//class name
  array1.push(datadb[i].name);//class name
  array2.push('');//class namecut
 
}
this.classes.push(
        array0,
        array1
        );
 







},//getclassesfromdb

async   loadsubjects(){
                        this.datamsg = "loadsubjects...";
            this.loading = true;
            var datadb  
            try{
            await axios.post("/api/subject/all" )
            .then((res) => {
            datadb = res.data.message;
                        this.datamsg = "loadsubjects...Done";

            this.loading = false;
            // console.log('datadb');
            // console.log(datadb);
            
            });
            } catch (e) {
                        this.datamsg = "loadsubjects...error";
            // console.log(e);
            // this.datamsg = "data error";
            alert("loadsubjects data error");
            alert(e.response.status);
            }


var array0=[]//id);
var array1=[]//name);
var array2=[]//namecut);
this.subjects=[]

for(var i = 0; i < datadb.length; i++){
  array0.push(datadb[i].id);
  array1.push(datadb[i].name);
  array2.push(datadb[i].namecut);

}


  this.subjects.push(
        array0,
        array1,
        array2,);

},//loadsubjects
async   loadteachers(){
                        this.datamsg = "loadteachers...";
            this.loading = true;
            var datadb  
            try{
            await axios.post("/api/teacher/all" )
            .then((res) => {
            datadb = res.data.message;
            console.log('teacher/all');
            console.log(datadb);
            
            this.datamsg = "loadteachers...Done";
            this.loading = false;
            });
            } catch (e) {
            this.datamsg = "loadteachers...error";

            alert("loadteachers data error");
            alert(e.response.status);
            }

 
var array0=[]//id);
var array1=[]//name);
var array2=[]//namecut);
this.teachers=[]

for(var i = 0; i < datadb.length; i++){
  array0.push(datadb[i].id);
  array1.push(datadb[i].namear);
  array2.push(datadb[i].nameen);

}
  this.teachers.push(
        array0,
        array1,
        array2,);

console.log(this.teachers);


},//loadsubjects
generateSubjectClass(){
            this.datamsg = 'generateSubjectClass ...';
//             var a='';
// for (let index = 0; index < this.classchoosed.length; index++) {

// a = this.classes[1].indexOf(this.classchoosed[index]);
//             this.classes[2][a]=this.subjectchoosed
// }

            this.selectedteacher=[]
            this.selectedpercount=[]
this.sct=[]
var array=[]

for (let indexs = 0; indexs < this.subjectchoosed.length; indexs++) {
array={
   class: this.classchoosed,
   class_id: this.classes[0][this.classes[1].indexOf(this.classchoosed)],


   subject:  this.subjects[1][this.subjects[0].indexOf(this.subjectchoosed[indexs])],

   subject_id: this.subjectchoosed[indexs],
   teacher: '',//teacher
   teacher_id: '',//teacher_id
   periodcount: ''//periodcount
 }
this.sct.push(array)
console.log('this.sct');
console.log(this.sct);

 

}

 },

async   savesct(){
    var msgin='savesct'
            this.datamsg = msgin+"...";
            this.loading = true;
this.sct.forEach(element => {
    
});

            var datadb
            try{

            await axios.post("/api/sct/savesct" ,this.sct)
            .then((res) => {
            datadb = res.data.message; console.log(datadb);
            this.datamsg = "...Done";
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}
            this.datamsg = datadb



},//getclassesfromdb







   }





}
</script>

<style scoped>

</style>