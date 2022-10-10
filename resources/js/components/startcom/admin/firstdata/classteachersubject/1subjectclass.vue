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
         <select name="select" size="10" multiple class=" w-32"
         v-model="classchoosed"
         >
             <option
             v-for="(item,index) in this.classSujectsArray[1]" :key='index'
              :value="item">{{item}}</option>
         </select>


         <select name="select"
         v-model="subjectchoosed" size="10" multiple  class=" w-32"
         >
             <option
             v-for="(item,index) in subjectsarray[1]" :key='index'
              :value="subjectsarray[0][index]">{{item}}</option>
         </select></div>
<p>
    <button class="hvr-buzz-out animation-list animate__animated animate__fadeInRight" @click="generateSubjectClass">generate subjects for every class</button>
</p>
<p>datamsg:{{datamsg}}</p>
<!-- <p>datamsg2</p>
<p>{{datamsg2}}</p>
<p>classSujectsArray:</p>
<p>{{classSujectsArray[2]}}</p> -->
<br>
<!-- <p>{{classSujectsArray[0]}}</p>
<p>{{classSujectsArray[1]}}</p>
<p>{{classSujectsArray[2]}}</p> -->

           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subjects</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in classSujectsArray[1]" :key='index'>
                       <td>{{item}}</td>
                       <td>
                           <span v-for="(item2,index2) in classSujectsArray[2][index]" :key='index2'>

                                <span
                                class="bg-blue-500 text-white text-sm  py-0.5 pl-2 pr-2 rounded mr-1 mb-1  items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1"
                                >
                               {{subjectsarray[1][subjectsarray[0].indexOf(item2)]}}
                                </span>

                                </span>

                          </td>

                   </tr>
               </tbody>
           </table>

<button @click="savesubjectstodb">save</button>

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
            classSujectsArray: [],
            subjectchoosed:[],
            subjectsarray: [],

            // classes: '',
            classesdb: [],
        };
    },
mounted() {
this.loadclasses()
this.loadsubjects()
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
            // alert("loadclasses data error");
            // alert(e.response.status);
            }


    this.classSujectsArray=[]
var array0=[]//class id
var array1=[]//class name
var array2=[]//subjectsarray id


for(var i = 0; i < datadb.length; i++){
  array0.push(datadb[i].id);//class id
//   array1.push('');//class name
  array1.push(datadb[i].name);//class name
  array2.push('');//class namecut
//   array2.push(datadb[i].namecut);//class namecut
  
//   array3.push('');//subjectsarray names
//   array4.push('');//subjectsarray id
}
  this.classSujectsArray.push(
        array0,
        array1,
        array2,
        );
        this.classesdb=datadb
//  this.classSujectsArray[1]





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
            // alert("loadsubjects data error");
            // alert(e.response.status);
            }

this.subjectsarray=[]
var array0=[]//id);
var array1=[]//name);
var array2=[]//namecut);


for(var i = 0; i < datadb.length; i++){
  array0.push(datadb[i].id);
  array1.push(datadb[i].name);
  array2.push(datadb[i].namecut);

}
  this.subjectsarray.push(
        array0,
        array1,
        array2,);



},//getclassesfromdb

generateSubjectClass(){
            this.datamsg = 'generateSubjectClass ...';
            var a='';
for (let index = 0; index < this.classchoosed.length; index++) {
a = this.classSujectsArray[1].indexOf(this.classchoosed[index]);
            this.classSujectsArray[2][a]=this.subjectchoosed
}
 this.datamsg2 ='indexOf("1A")'+this.classSujectsArray[0][a]+" => "+this.classSujectsArray[1]
},

async   savesubjectstodb(){
    var msgin='savesubjectstodb'
            this.datamsg = msgin+"...";
            this.loading = true;

            var datadb
            try{

            await axios.post("/api/classSujects/insert" ,this.classSujectsArray)
            .then((res) => {
            datadb = res.data.message; console.log(datadb);
            this.datamsg = "...Done";
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            // alert(msgin+" ... error");
            }
            this.datamsg = datadb



},//getclassesfromdb


async   updateteachers(){
    var msgin='savesubjectstodb'
            this.datamsg = msgin+"...";
            this.loading = true;

            var datadb
            try{

            await axios.post("/api/classSujects/updateteachers" ,this.classSujectsArray)
            .then((res) => {
            datadb = res.data.message; console.log(datadb);
            this.datamsg = "...Done";
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            // alert(msgin+" ... error");
            }
            this.datamsg = datadb

// this.subjectsarray=[]
// var array1=[]
// var array2=[]
// var array3=[]

// for(var i = 0; i < datadb.length; i++){
//   array1.push(datadb[i].id);
//   array2.push(datadb[i].name);
//   array3.push(datadb[i].namecut);
// }
//   this.subjectsarray.push(
//         array1,
//         array2,
//         array3);


},//getclassesfromdb





   }





}
</script>

<style scoped>

</style>