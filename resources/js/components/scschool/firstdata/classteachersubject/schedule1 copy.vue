<template>
    <div>
        <div class="fixed p-2 top-0 right-0   bg-green-200">
            <span>{{datamsg}}</span>
        </div>
<button v-show="datadb[0]" @click="classnamesfilter">classnamesfilter</button>

<button @click="cfilter('5A')">cfilter 5A</button>

<input type="text" v-model="filteredtxt" class="intxt">{{filteredtxt}}
<!--         
<p>alldbarray{{alldbarray}}</p>
<p>datadb[0]{{datadb[0]}}</p> -->
           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subject</th>
                       <th>teacher</th>
                       <th>periodcount</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in filteredClients" :key='index'>
                       <td>{{item.class}}</td>
                       <td>{{item.subject}}</td>
                       <td>{{item.teacher}}

         <select name="select"
         v-model="filteredClients[index].teacherid"
         >
             <option
             v-for="(item,indext) in datadb[2]" :key='indext'
              :value="item.id">{{item.namear}}</option>
         </select>
{{filteredClients[index].teacherid}}

                       </td>
                       <td>
                            <select name="select"
         v-model="filteredClients[index].periodcount"
         >
             <option
             v-for="one in 12" :key='one'
              :value="one">{{one}}</option>
         </select>
<!-- {{alldbarray[index].periodcount}} -->
                           
                           
                           
                           {{item.periodcount}}</td>
                       <td>{{item.subjectid}}</td>
<!-- { "classid": 2, "class": "1B", "subjectid": "1", "subject": "English", "teacherid": "", "teacher": "", "periodcount": "" } -->
                   </tr>
               </tbody>
           </table>
           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subject</th>
                       <th>teacher</th>
                       <th>periodcount</th>

                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in alldbarray" :key='index'>
                       <td>{{item.class}}</td>
                       <td>{{item.subject}}</td>
                       <td>{{item.teacher}}

         <select name="select"
         v-model="alldbarray[index].teacherid"
         >
             <option
             v-for="(item,indext) in datadb[2]" :key='indext'
              :value="item.id">{{item.namear}}</option>
         </select>
{{alldbarray[index].teacherid}}

                       </td>
                       <td>
                            <select name="select"
         v-model="alldbarray[index].periodcount"
         >
             <option
             v-for="one in 12" :key='one'
              :value="one">{{one}}</option>
         </select>
<!-- {{alldbarray[index].periodcount}} -->
                           
                           
                           
                           {{item.periodcount}}</td>
                       <td>{{item.subjectid}}</td>
<!-- { "classid": 2, "class": "1B", "subjectid": "1", "subject": "English", "teacherid": "", "teacher": "", "periodcount": "" } -->
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
            datadb: [],
            ca1:[],
sa1:[],
ta1:[],
ca2:[],
sa2:[],
ta2:[],
cname :[],
snames:[],
sids  :[],
tnames:[],
tids  :[],
alldbarray:[],
             classidsarray: [],
            selectedteacher: [],
            filteredtxt: '',
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
        };
    },

computed: {
  filteredClients() {
//     const search = this.searchClient.toLowerCase().trim();

//    if (!search) return this.clients;

//    return this.clients.filter(c => c.name.toLowerCase().indexOf(search) > -1);
//  if (!this.alldbarray) return 
//  if (this.filteredtxt=='') return this.alldbarray;
    const search =   this.filteredtxt;
    // const search = this.alldbarray.toLowerCase().trim();

   if (search=='') return this.alldbarray;

   return this.alldbarray.filter(c => c.class.indexOf(search) > -1);
//    return this.clients.filter(c => c.name.toLowerCase().indexOf(search) > -1);






}
},

mounted() {
this.loadmix()
this.classnamesfilter()
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

cfilter(name){
// var array=this.alldbarray
// var ttt=array.filter(function(item){ return item.class == name;} ).pop();
// this.alldbarray=ttt
// console.log('this.alldbarray');
// console.log(ttt);



// let digitalGoods =  products.filter(function(product) {
//     return product.company == 'Microsoft';
// });
this.alldbarrayfiltered=  this.alldbarray.filter(function(item) {
    return item.class == name;
});







},


classnamesfilter(){
    if (!this.datadb[0]) {return null}

        var classes =this.datadb[0]
        var subjects=this.datadb[1]
        var teachers=this.datadb[2]
        var cst     =this.datadb[3]

        var ca1=[]
        var sa1=[]
        var ta1=[]

        var ca2=[]
        var sa2=[]
        var ta2=[]
this.cname =[]
this.snames=[]
this.sids  =[]
this.tnames=[]
this.tids  =[]

 for (let index = 0; index < classes.length; index++) {
        ca1.push(classes[index].id);
        ca2.push(classes[index].name);
        // console.log(ca2);
    }

for (let index = 0; index < subjects.length; index++) {
sa1.push(subjects[index].id);
sa2.push(subjects[index].name);
}

for (let index = 0; index < teachers.length; index++) {
ta1.push(teachers[index].id);
ta2.push(teachers[index].namear);
}



var subject_ids=[]
var class_name=[]
for (let index = 0; index < cst.length; index++) {
    
    
    
//     subject_ids=cst[index].subject_ids.split(",")
// // all sub in this class-------------------------
// console.log('subject_ids');
// console.log(subject_ids);
    var subject_names=[]
var tnames=[]
for (let indexsub = 0; indexsub < subject_ids.length; indexsub++) {
var subject_name=sa2[sa1.indexOf(parseInt( subject_ids[indexsub]))]
console.log('subject_name');
console.log(subject_name);
// console.log('subject_ids');
// console.log(subject_ids);
// console.log('subject_ids[indexsub]');
// console.log(subject_ids[indexsub]);
// console.log('sa1');
// console.log(sa1);
// console.log('sa2');
// console.log(sa2);
// console.log('---------------------------------------');
tnames.push('')
subject_names.push(subject_name)
this.alldbarray.push(
    {
        classid: cst[index].class_id,
        class: ca2[ca1.indexOf(cst[index].class_id)],
        subjectid: subject_ids[indexsub],
        subject: sa2[sa1.indexOf(parseInt( subject_ids[indexsub]))],
        teacherid: '',
        teacher: '',
        periodcount: '',

    }
    // this.selectedteacher.push(
)
}

// all sub in this class--------------------------
console.log(subject_names);

this.ca1=ca1
this.sa1=sa1
this.ta1=ta1
this.ca2=ca2
this.sa2=sa2
this.ta2=ta2


class_name=ca2[ca1.indexOf(cst[index].class_id)]
this.cname.push(class_name)



this.snames.push(subject_names)
this.sids.push(subject_ids)
this.tnames.push(tnames)
this.tids.push(tnames)
console.log(this.snames);

}
console.log(this.snames);

},
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
            //  console.log(datadb);
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
for (let index = 0; index < this.datadb[1].length; index++) {
     this.generalsubjectsarray.push(this.datadb[1][index].name);
     this.generalsubjectsarrayid.push(this.datadb[1][index].id);
this.teachersarrayidtodb.push([]);
 }
for (let index = 0; index < this.datadb[0].length; index++) {


          var uu={value:this.datadb[0][index].id,
                name:this.datadb[0][index].name}
     this.classnamesidsarray.push(uu);
     this.classidsarray.push( this.datadb[0][index].id);
 }
 for (let index = 0; index < this.datadb[2].length; index++) {

          this.generalteachersarray.push(this.datadb[2][index].namear);
          var uu={value:this.datadb[2][index].id,
                name:this.datadb[2][index].namear}
     this.generalteachersarrayidname.push(uu);
     
     this.generalteachersarrayid.push(this.datadb[2][index].id);

 }
for (let index = 0; index < this.datadb[3].length; index++) {
    // subarray_ids = this.datadb[3][index].subject_ids;

    console.log(this.datadb[3][index].subject_ids=='null');
    
    if (this.datadb[3][index].subject_ids=='null') {
         this.subarray_ids.push([]);
    }else{

   
//    var  array=this.datadb[3][index].subject_ids.split(",")
    
    // for (let index2 = 0; index2 < array.length; index2++) {

//  this.subarray_ids.push(array);
    }
   
    this.teacheridsarray.push([]); 
    // }
}
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

   }





}
</script>

<style scoped>

</style>