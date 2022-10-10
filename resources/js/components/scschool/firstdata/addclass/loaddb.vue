<template >
    <div><!-- loadingw-screen  overflow-auto-->
       <div
       :class="(loading)? animclassin:animclassout "
        class="flex top-0 text-center"><div class="m-auto"><p    class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{datamsg}}</p> </div></div>
 <div class="fixed p-2 top-0 right-0   bg-green-200">
<span>{{datamsg}}</span>
</div>


    <!-- v-model="chooseclassnames" -->
==========================================================================================<br>
<Multiselect
  v-model="option1"
     mode="tags"
      track-by="value"
    label="name"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"

      :options="[
      { value: 'vjudy', name: 'nJudy', image: 'https://randomuser.me/api/portraits/med/women/1.jpg' },
      { value: 'vjane', name: 'nJane', image: 'https://randomuser.me/api/portraits/med/women/2.jpg' },
      { value: 'vjohn', name: 'nJohn', image: 'https://randomuser.me/api/portraits/med/men/1.jpg' },
      { value: 'vjoe', name: 'nJoe', image: 'https://randomuser.me/api/portraits/med/men/2.jpg' }
    ]"

/>
 option1:{{option1}}
==========================================================================================<br>
    <!-- v-model="value"
    mode="tags"
    placeholder="Select employees"
    track-by="name"
    label="name"
    :close-on-select="false"
    :searchable="true"
    :options="[
      { value: 'judy', name: 'Judy', image: 'https://randomuser.me/api/portraits/med/women/1.jpg' },
      { value: 'jane', name: 'Jane', image: 'https://randomuser.me/api/portraits/med/women/2.jpg' },
      { value: 'john', name: 'John', image: 'https://randomuser.me/api/portraits/med/men/1.jpg' },
      { value: 'joe', name: 'Joe', image: 'https://randomuser.me/api/portraits/med/men/2.jpg' }
    ]" -->

















<!-- classes from database======================================================= -->
<!-- {{gradesdb}} -->
<div class="flex flex-col   animate__animated animate__fadeIn">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden text-center">
        <table class="m-auto w-11 tbl2">
        <!-- <table class="min-w-full">   bg-blue-500 -->
          <thead class="bg-white border-b border">
            <tr>
              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                Class Name
              </th>
              <th scope="col" class=" bg-purple-500 text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                subjects
              </th>


            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border  transition duration-300 ease-in-out hover:bg-gray-100">

  <!-- v-for="(menuitem,index) in gradesdb" :key="index" -->

              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">
                <!-- <button @click="deleteclass(menuitem.id )">delete</button>
                {{menuitem.classname }}  -->
<Multiselect
    v-model="chooseclassnames"
  
  :close-on-select="false"
  :searchable="true"
  :create-option="false"

  :options="classnamesarray"

/>
              </td>
              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">

                            <Multiselect
    v-model="subjectsarraydb"
   mode="tags"
  :close-on-select="false"
  :searchable="true"
  :create-option="false"

  :options="subjectsarray[1]"
  :classes="{
  container: 'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none',
 tag: 'bg-blue-500 text-white text-sm font-semibold py-0.5 pl-1 rounded mr-1 mb-1 flex items-center whitespace-nowrap rtl:pl-0 rtl:pr-1 rtl:mr-0 rtl:ml-1',
 search: '   border-0 hvr-box-shadow-none focus-box-shadow-none   ',
}"
/>
 <!-- max='1' -->
              </td>


            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>

 
 
 <!-- <p>classnamesarray:{{classnamesarray}} </p> -->
<!-- <p>subjectsarray{{subjectsarray}}</p> -->


choose class Name: {{chooseclassnames}} <br>
subjectsarraydb{{subjectsarraydb}}<br>
subjectsarraydbcom{{subjectsarraydbcom}}<br>
           <br><table  class='tbl1'>
           <thead>
               <tr>
                   <th>subject</th>
                   <th>teacher</th>

               </tr>
           </thead>
           <tbody>

               <tr v-for="(item,index) in subjectsarraydb" :key='index'  >
                   <td>{{item}}</td>
                   <td>
<select name="chooseteacher" v-model="chooseteacherarray[index]">
  <option  v-for="(item,index) in teacherarray" :key='index'  :value="item[0]">{{item[1]}}</option>
</select>
                     {{chooseteacherarray[index]}} 
                   </td>

               </tr>
           </tbody>
       </table>
{{chooseteacherarray}}
    </div>
</template>
<script>

import 'animate.css';

  import Multiselect from '@vueform/multiselect'

  export default {
    components: {
      Multiselect,
    },
    data() {
        return {
         options: [
      { value: 'judy', name: 'Judy', image: 'https://randomuser.me/api/portraits/med/women/1.jpg' },
      { value: 'jane', name: 'Jane', image: 'https://randomuser.me/api/portraits/med/women/2.jpg' },
      { value: 'john', name: 'John', image: 'https://randomuser.me/api/portraits/med/men/1.jpg' },
      { value: 'joe', name: 'Joe', image: 'https://randomuser.me/api/portraits/med/men/2.jpg' }
    ],
    option1:[],

              loading :false,
              gradesdb:[],
              dbcolnamesarray:[ `id`, `schoolgroup_id`, `school_id`, `stage`, `classname`, `nameLong`, `createdby`, `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`],
 
              datamsg:null,
              animclassin :' animate__animated  animate__jackInTheBox',
              animclassout:' animate__animated  animate__bounceOut',
              subjectsarraydb:[],
              classnamesarraydb:[],
              classnamesarray:[],
              chooseclassnames:'',
              subjectsarray:[],
              teacherarray:[],
              chooseteacherarray:[,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,],
              // subjectsarray:[

// 'English'                     ,
// 'math'                        ,
// 'art'                         ,
// 'science'                     ,
// 'history'                     ,
// 'music'                       ,
// 'geography'                   ,
// 'P.E (Physical Education)'    ,
// 'drama'                       ,
// 'biology'                     ,
// 'chemistry'                   ,
// 'physics'                     ,
// 'I.T (Information Technology)',
// 'foreign languages'           ,
// 'social studies'              ,
// 'technology'                  ,
// 'philosophy'                  ,
// 'graphic design'              ,
// 'literature'                  ,
// 'algebra'                     ,
// 'geometry'                    ,

//               ],

        }
    },
        mounted() {
            // alert('ff');
            // this.menuall();
            this.loadclasses();
            this.loadteachers();
 this.loadsubjects();
},
computed:{

//   subjectsarraydbcom(){
//     this.chooseteacherarray=[]
// for(var i = 0; i < this.subjectsarraydb.length; i++){

// this.chooseteacherarray.push('');

// }
// return this.subjectsarraydb
            
                
//   },
// countsubjectscom(){

//  return this.countsubjects
// }



},
    methods: {
alert(val){
    //  alert(this.datamsg);
    //  setTimeout(() => alert(this.datamsg), 2000);
  //    setTimeout(
  //   _ =>  alert(val), // enable the input
  //   1000 // after 1 second
  // )
       setTimeout(
    _ =>  this.datamsg='', // enable the input
    1000 // after 1 second
  )
},
        async   loadsubjects(){
            this.datamsg = '';
            this.loading = true;
            var datadb  
            try{
            await axios.post("/api/subject/all" )
            .then((res) => {
            datadb = res.data.message;
            this.loading = false;
            console.log('datadb');
            console.log(datadb);
            
            });
            } catch (e) {
            // console.log(e);
            this.datamsg = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
setTimeout(() => this.datamsg = '', 2000);

this.subjectsarray=[]
var array1=[]
var array2=[]
var array3=[]

for(var i = 0; i < datadb.length; i++){
  array1.push(datadb[i].id);
  array2.push(datadb[i].name);
  array3.push(datadb[i].namecut);
}
  this.subjectsarray.push(
        array1,
        array2,
        array3);

},//getclassesfromdb
        async   loadclasses(){
            this.datamsg = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/all" )
            .then((res) => {
            this.gradesdb = res.data.message;
            this.loading = false;
            });
            } catch (e) {
            // console.log(e);
            this.datamsg = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
setTimeout(() => this.datamsg = '', 2000);
this.classnamesarray=[]
for(var i = 0; i < this.gradesdb.length; i++){
  this.classnamesarray.push(this.gradesdb[i].classname);

}

},//getclassesfromdb
        async   deleteclass(id){
            this.datamsg = '';
            this.loading = true;  
            try{
            await axios.post("/api/class/delete",{'id':id} )
            .then((res) => {
            this.txtmsg2 = res.data.message;
            this.loading = false;

            });
            } catch (e) {
            // console.log(e);
            this.datamsg = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
             alert(this.datamsg);
setTimeout(() => this.datamsg = '', 2000);

this.loadclasses();
          },//deleteclass

      async   classupdateone(col,index){

let mydata=''

if  (col==1){ mydata=this.txt1[index]}
if  (col==2){ mydata=this.txt2[index]}
if  (col==3){ mydata=this.txt3[index]}
if  (col==4){ mydata=this.txt4[index]}
if  (col==5){ mydata=this.txt5[index]}
if  (col==6){ mydata=this.txt6[index]}
if  (col==7){ mydata=this.txt7[index]}
if  (col==8){ mydata=this.txt8[index]}
if  (col==9){ mydata=this.txt9[index]}
      //  var    mycol =eval('this.txt'+2)[index]
        // var myVar = eval(varString)
// var val1=this.mycol[index]
let colname=this.dbcolnamesarray[col]
// console.log(mydata)
// console.log(index)
// console.log(colname)
// console.log(val1)
// this.txt2sh[index]=!txt2sh[index]
return
         console.log('classnew')
                // e.preventDefault();
            this.loading = true;
            try{
            await axios.post("/api/class/createone",
            {
'stage':this.txtstage    ,
'classname':this.txtclassname,
'nameLong':this.txtnameLong ,
'notes1':this.txtnotes1

            } )
            .then((res) => {
                console.log(res.data)
            this.datamsg = res.data;
            this.loading = false;
            });
            } catch (e) {
             console.log(e);
            this.datamsg = "data error";
            alert("saveparticipations data error");
            alert(e.response.status);
            }
this.loadclasses()
          },//classnew


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
//  `id`, `name`, `email`, `email_verified_at`, `password`,
//  `usertype`, `schoolgroup_id`, `school_id`,
//   `nid`, `nameen`, `namear`, `classname`, `parent_id`, `active`, `createdby`, 
//  `nid`, `nameen`, `namear`, `classname`,`usertype`,

        this.teacherarray=[]

        // this.alltxtorigin=[]
        for(var i = 0; i < this.dbdataarray.length; i++){
                let datain=[
                        this.dbdataarray[i].id,
                        this.dbdataarray[i].nameen,
                        this.dbdataarray[i].namear    ,
                        this.dbdataarray[i].classname ,

                        ]
        this.teacherarray.push(datain);

        // this.alltxtorigin.push(datain);
        }
},//loadteachers


          

    },
    
}
</script>
<style src="@vueform/multiselect/themes/default.css">
.multiselect-tag.is-user {
    padding: 5px 8px;
    border-radius: 22px;
    background: #35495e;
    margin: 3px 3px 8px;
  }

  .multiselect-tag.is-user img {
    width: 18px;
    border-radius: 50%;
    height: 18px;
    margin-right: 8px;
    border: 2px solid #ffffffbf;
  }

  .multiselect-tag.is-user i:before {
    color: #ffffff;
    border-radius: 50%;;
  }

  .user-image {
    margin: 0 6px 0 0;
    border-radius: 50%;
    height: 22px;
  }
</style>
