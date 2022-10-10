<template>
    <div>
        <div :class="(animationMsg)?'animate__animated   animate__jello animate__animated animate__swing  ':' animate__animated  animate__flipOutX'" class="fixed p-2 top-0 right-0   bg-green-200">
            <span  ><span v-show="loading"  ><svg xmlns='http://www.w3.org/2000/svg' height='16' width='16' class='loadingsvg'><path d='M7 3V1s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z'/><path d='M4.63 4.1l-1-1.73S3.13 1.5 4 1c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.57-1.37-.37-1.37-.37z' fill-opacity='.93'/><path d='M3.1 6.37l-1.73-1S.5 4.87 1 4c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.86'/><path d='M3 9H1S0 9 0 8s1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.79'/><path d='M4.1 11.37l-1.73 1S1.5 12.87 1 12c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.72'/><path d='M3.63 13.56l1-1.73s.5-.87 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.65'/><path d='M7 15v-2s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z' fill-opacity='.58'/><path d='M10.63 14.56l-1-1.73s-.5-.87.37-1.37c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.5-1.37-.37-1.37-.37z' fill-opacity='.51'/><path d='M13.56 12.37l-1.73-1s-.87-.5-.37-1.37c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z' fill-opacity='.44'/><path d='M15 9h-2s-1 0-1-1 1-1 1-1h2s1 0 1 1-1 1-1 1z' fill-opacity='.37'/><path d='M14.56 5.37l-1.73 1s-.87.5-1.37-.37c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z' fill-opacity='.3'/><path d='M9.64 3.1l.98-1.66s.5-.874 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z' fill-opacity='.23'/></svg></span></span>
            <span>{{datamsg}}</span>
        </div>
subjectteacher

<button @click="classnamesfilter">classnamesfilter</button>






<!-- <details>
  <summary>Epcot Center</summary>
  <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
</details> -->
<details>
  <summary> classnamesfiltercom </summary>
<!-- <p>ca1{{ca1}}</p> -->
<!-- <p>sa1{{sa1}}</p> -->
<!-- <p>ta1{{ta1}}</p> -->
<!-- <p>ca2{{ca2}}</p> -->
<!-- <p>sa2{{sa2}}</p> -->
<!-- <p>ta2{{ta2}}</p> -->
<!-- <p>{{cname }}</p><br> -->
<p>{{alldbarray}}</p><br>
<!-- <p>{{sids  }}</p><br> -->
<!-- <p>{{tnames}}</p><br> -->
<!-- <p>{{tids  }}</p><br> -->
</details>
           <table class='tbl1'>
               <thead>
                   <tr>
                       <th>N</th>
                       <th>class</th>
                       <th>subjects</th>
                       <th>teachers</th>
                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in datadb[0]" :key='index'>
                       <td>{{index+1}}</td>
                       <td>{{item.name}} </td>
                       <td>

                                      <table  class='tbl1'>
                                      <thead>
                                          <tr>
                                              <th>sub</th>
                                              <th>tacher</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr v-for="(item,indext) in subarray_ids[index]" :key='indext' >
                                              <td>{{ generalsubjectsarray[generalsubjectsarrayid.indexOf(parseInt(item))]}}</td>
                                              <td>
                                                        <Multiselect
                                                            v-model="teachersarrayidtodb[index][indext]"
                                                            placeholder="Select Teacher"
                                                            track-by="value"
                                                            label="name"
                                                            :close-on-select="true"
                                                            :searchable="true"
                                                            :options="generalteachersarrayidname"
                                                            :classes="{
                                                            search: 'w-full absolute inset-0 outline-none focus:ring-0 appearance-none box-border border-0 text-base font-sans bg-white rounded pl-3.5 rtl:pl-1 rtl:pr-3.5',
                                                            }">
      <template v-slot:tag="{ option, handleTagRemove, disabled }">
        <div
          class="multiselect-tag is-user"
          :class="{
            'is-disabled': disabled
          }"
        >

          {{ option.name }}
          <span
            v-if="!disabled"
            class="multiselect-tag-remove"
            @click="handleTagRemove(option, $event)"
          >
            <span class="multiselect-tag-remove-icon"></span>
          </span>
        </div>
      </template>
  </Multiselect></td>

                                          </tr>
                                      </tbody>
                                  </table>

 
              </td>
                       <td>

                             <span  >{{item.teacher_ids}}</span>
                       </td>

                   </tr>
               </tbody>
           </table>

<button @click="savesubjectstodb">save</button>
    </div>
</template>

<script>

  import Multiselect from '@vueform/multiselect'

export default {
    data() {
        return {
            datamsg: '',
            datamsg2: '',
            loading:false,
            animationMsg:true,
subarray_ids: [],
teacheridsarray: [],
            classchoosed: [],
            classSujectsArray: [],
            subjectchoosed:[],
            subjectsarray: [],
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
alldbarrayfiltered:[],
classnamesidsarray: [],
classidsarray: [],
filteredtxt:'',
teachersarrayidtodb: [],
            // classes: '',
            datadb: [],
        };
  
    },
        components: {
      Multiselect,
    },
mounted() {
// this.loadclasses()
// this.loadsubjects()
// this.loadteachers()
this.loadmix()
this.classnamesfilter()
    },
computed:{


  },
   methods: {
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
            // alert(msgin+" ... error");
            }
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

   }





}
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
