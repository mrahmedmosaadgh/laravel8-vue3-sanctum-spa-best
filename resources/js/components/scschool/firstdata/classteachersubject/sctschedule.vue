<template>
    <div>
        <div class="fixed p-2 top-0 right-0   bg-green-200">
            <span>{{datamsg}}</span>
        </div>
<p><button @click="myclipboard='5A'">myclipboard 5A</button></p>
<p><button @click="myclipboard='5B'">myclipboard 5B</button></p>
<p><button @click="myclipboard='5C'">myclipboard 5C</button></p>
<p><button @click="loadmix">loadmix</button></p>
<p :class=" (counter==0)?'bg-red-400':'bg-green-400'">counter:{{counter}}</p>
<p>myclipboard:{{myclipboard}}</p>


           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subjects</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in mix[0]" :key='index'>
                       <td>{{mix[0][index]}}</td>
                       <td>{{mix[1][index]}}</td>
                       <td>{{mix[2][index]}}</td>
                       <td>{{mix[3][index]}}</td>
                       <td>{{mix[4][index]}}</td>
                       <td>{{mix[5][index]}}</td>
                       <td>{{mix[6][index]}}</td>
                       <td>{{mix[7][index]}}</td>
                       <td>{{mix[8][index]}}</td>
                       <td>{{mix[9][index]}}</td>
                       <td>
                        <button @click="mix[8][index]=14">mix[8][index]</button>
                        <button @click="mix2.periodcode[index]=14">mix2.periodcode</button>
                        <p>mix: {{mix[8][index]}}</p>
                        <p>mix2:{{ mix2.periodcode[index]}}</p>
                        </td>
                    </tr>
               </tbody>
           </table>


<p>{{mix[8]}}</p>
<p>{{mix2.periodcode}}</p>

           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subjects</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(day,index) in schedulearray" :key='index'>
                       
                       
                       <td
                        v-for="(perday,indexp) in day" :key='indexp'
                       >
                       <button @click="myfun(index,indexp)" :class="(perday=='x')?'bg-red-600 disabled cursor-not-allowed':'bg-green-300 '"  >{{perday}}</button>
                       
                       </td>

                   </tr>
               </tbody>
           </table>
    </div>
</template>

<script>


export default {
    data() {
        return {

            loading: '',
            datamsg: '',
            gradesdb: '',
            myclipboard: '',
            counter:5,
            schedulearray:[
                ['x','x','x','x','x','x','x','x','x','x','x','x','x'],
                ['x',,,,,,,,,,,,,],
                ['x',,,,,,,,,,,,,],
                ['x',,,,,,,,,,,,,],
                ['x',,,,,,,,,,,,,],
                ['x',,,,,,,,,,,,,],
                ['x',,,,,,,,,,,,,],
            ],
            classes: [],//0id 1name
            subjects: [],//0id 1name 2namecut
            teachers: [],
            // classnamesarray: [],
            mix: [],
            mix2: [],
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
        };
    },
mounted() {
// this.loadclasses()
    },
    watch: {
    datamsg() {
if (this.datamsg.length>0) {
setTimeout(() => this.datamsg = '', 5000);
}
      
      }},
// computed:{

// com(){
// return value

//   },
   methods: {
async   loadmix(){
    var msgin='loadmix'
            this.datamsg = msgin+"...";
            this.loading = true;

            // var datadb
            try{
// this.classSujectsArray
            await axios.post("/api/classSujects/loadmix" ,)
            .then((res) => {
            this.datadb = res.data.message;
            console.log(this.datadb);
            this.datamsg = "...Done:";
            console.log('Done');
            // console.log(datadb);
// 0 class  
// 1 subject
// 2 teacher
// 3 mix,
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}
// ----------------------------------------------------------
this.subarray_ids=[]
this.teacheridsarray=[]
this.generalsubjectsarray=[]
this.generalsubjectsarrayid=[]
this.generalteachersarray=[]
this.generalteachersarrayid=[]
this.generalteachersarrayidname=[]
this.classnamesidsarray=[]
this.teachersarrayidtodb=[]
            this.classes=  []//0id 1name
            this.subjects= []//0id 1name 2namecut
            this.teachers= []


 
var array0=[]//class id
var array1=[]//class name
var array2=[]//class namecut

for (let index = 0; index < this.datadb[0].length; index++) {
    array0.push( this.datadb[0][index].id)
    array1.push( this.datadb[0][index].name)


 }
this.classes.push(
        array0,
        array1
        );
        var array0=[]//class id
var array1=[]//class name
var array2=[]//class namecut
for (let index = 0; index < this.datadb[1].length; index++) {
    array0.push( this.datadb[1][index].id)
    array1.push( this.datadb[1][index].name)
     this.generalsubjectsarray.push(this.datadb[1][index].name);
     this.generalsubjectsarrayid.push(this.datadb[1][index].id);
this.teachersarrayidtodb.push([]);
 }
this.subjects.push(
        array0,
        array1
        );



var array0=[]//class id
var array1=[]//class name
var array2=[]//class namecut


 for (let index = 0; index < this.datadb[2].length; index++) {
    array0.push( this.datadb[2][index].id)
    array1.push( this.datadb[2][index].namear)
    array2.push( this.datadb[2][index].nameen)
          this.generalteachersarray.push(this.datadb[2][index].namear);
          var uu={value:this.datadb[2][index].id,
                name:this.datadb[2][index].namear}
     this.generalteachersarrayidname.push(uu);
     
     this.generalteachersarrayid.push(this.datadb[2][index].id);

 }
this.teachers.push(
        array0,
        array1,
        array2,
        );


// class_id: 1
// color: null
// id: 1
// periodcount: 3
// school_id: 1
// schoolgroup_id: 1
// subject_id: 1
// teacher_id: 141



var array0=[]//class id
var array1=[]//class name
var array2=[]//class namecut
var array3=[]//class namecut

var array11=[]//class name
var array22=[]//class namecut
var array33=[]//class namecut
var array44=[]//class namecut
var array55=[]//class namecut
var array66=[]//class namecut

this.mix=[]

for (let index = 0; index < this.datadb[3].length; index++) {

    array0.push( this.datadb[3][index].id)
    array1.push( this.datadb[3][index].class_id)
    array2.push( this.datadb[3][index].subject_id)
    array3.push( this.datadb[3][index].teacher_id)
var classname=this.classes[1][this.classes[0].indexOf(this.datadb[3][index].class_id)]
// console.log(classname);
var subject=this.subjects[1][this.subjects[0].indexOf(this.datadb[3][index].subject_id)]
// console.log(subject);
var teacher=this.teachers[1][this.teachers[0].indexOf(this.datadb[3][index].teacher_id)]
// console.log(teacher);

    array11.push( classname)
    array22.push( subject)
    array33.push( teacher)
    array44.push( '')
    array55.push( '')
    array66.push( '')
}
this.mix.push(
        array0,
        array1,
        array2,
        array3,

        array11,
        array22,
        array33,
        array44,
        array55,
        array66,

        );
this.mix2={
id        :array0,
class_id  :array1,
subject_id:array2,
teacher_id:array3,
class     :array11,
subject   :array22,
teacher   :array33,
day       :array44,
period    :array55,
periodcode:array66,
}
        console.log(this.mix)
// ----------------------------------------------------------
//             var arrayOfWords = []; // Create the array to store words
// arrayOfWords = words.split(" ");
            // this.datamsg = datadb
 setTimeout(() => this.datamsg = '', 4000);
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


},//loadmix






myfun(index,indexp){


if(this.schedulearray[index][indexp]=='x'){
     alert("this.schedulearray[index][indexp]=='x'")
    return}
if(this.schedulearray[index][indexp]==this.myclipboard){
    alert("this.schedulearray[index][indexp]==this.myclipboard")
    this.schedulearray[index][indexp]=''
    this.counter++
    return
    }
    if(this.counter==0){
         alert('this.counter==0')
        
        return}

if(this.schedulearray[index][indexp]==null || this.schedulearray[index][indexp]==''){
    // alert("this.schedulearray[index][indexp]==''")

    this.schedulearray[index][indexp]=this.myclipboard
    this.counter--
    return
    }else{
         alert("else")
    }
    

    

}
   }





}
</script>

<style scoped>

</style>