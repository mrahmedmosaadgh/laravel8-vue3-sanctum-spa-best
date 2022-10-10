<template>
    <div>
        <div class="fixed p-2 top-0 right-0   bg-green-200">
            <span>{{datamsg}}</span>
        </div>
scschooltermmark
<br><p class=" bg-yellow-300">user:{{user}}</p> 
<br><p class=" bg-yellow-300">verified:{{verified}}</p> 


<!-- <button @click="alert1">alert1</button> <br>
<button @click="alert2">alert2</button> <br>
<button @click="suc">suc</button> <br>
<button @click="conf">conf</button> <br>
<button @click="savesubjectstodb">datadb</button> -->
<!-- {{datadb}} -->

<!-- 1
1
141

`id`, `schoolgroup_id`, `school_id`, `scschooltermmarkmain_id`,
`scschoolclassteachersubject_id`,
`teacher_id`, `class_id`, `subject_id`, `student_id`,
`term`, `stage`,
`mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`, `mark7`, `mark8`, `mark9`, `mark10`,
`mark1date`, `mark2date`, `mark3date`, `mark4date`, `mark5date`, `mark6date`, `mark7date`, `mark8date`, `mark9date`, `mark10date`, 
`notes1`, `notes2`, `notes3`,
`created_at`, `updated_at` -->
<!-- <p>datadb:{{datadb}}</p> <br> <br> -->
<button @click="loadmix">loadmix</button> <br>
<!-- <p>classnames:{{datadb.classnames}}</p> <br>
<p>subjects  :{{datadb.subjects  }}</p> <br>
<p>teachers  :{{datadb.teachers  }}</p> <br>
<p>students  :{{datadb.students  }}</p> <br>
<p>mix:{{datadb.mix}}</p> <br> -->
<p>user  :{{datadb.user  }}</p> <br>
<!-- classname
subject' 
teacher' 
mix'      -->
<!-- <p>this.datadb[0]:{{this.datadb[0]}}</p>
<p>this.datadb[1]:{{this.datadb[1]}}</p>
<p>this.datadb[2]:{{this.datadb[2]}}</p>
<p>this.datadb[3]:{{this.datadb[3]}}</p> -->

<br><button @click="teacher1()">dddd</button>
<br>           teacher_id  : {{teacher_id}}:{{teacher}}  
<br> <input type="text" name="" v-model="teacher_id" @change="teacher1()">
<p>count:{{count}}</p>
<!-- <br>           class_id    : {{class_id  }}:{{classname(class_id)  }}
<br>           subject_id  : {{subject_id}}:{{subject(subject_id)}}
<br> -->
<br>

<p>id: <input type="text" v-model="teacher_id" >  <button >id</button></p>
<p v-for="(item,index) in datadb" :key='index'>{{item.markname}}</p>
<p v-for="(item,index) in datatodb" :key='index'>
    <!-- <input type="text" v-model="datatodb[index].markname"><br> -->
    <button @click="item.markname+=',ddd'">+ddd</button>
    <button @click="update">update</button>
    {{item.markname}}

    <br>
    {{item}}
    </p>
  datadb:{{datadb2}}
  <!-- <p>datadb3: <br>{{datadb3}}</p> -->
  <p>this is child</p>
  <p class=" bg-red-500">parent says:{{parent}}</p>
  <p class=" bg-red-500">dd says:{{dd}}</p>
  
    </div>
</template>

<script>
import swal from 'sweetalert2'

export default {
    data() {
        return {
// parent:'child',
            loading: '',
            datamsg: '',
            gradesdb: '',
            datadb: [],
            datatodb: [],
            datadb2: [],
            teacher_id: 141,
            class_id: 1,
            count: 0,
            subject_id: 1,
            // datadb3: [{ "id": tt, "schoolgroup_id": 1, "school_id": 1, "scschoolclassteachersubject_id": 1, "teacher_id": 1, "class_id": 1, "subject_id": 1, "term": "1", "stage": "prim", "markname": "ar,en,sc,sse,ssa,ddd,ddd,ddd,ddd", "markfull": "100,100,100,100,100", "markmin": null, "publishdate": "2022-07-19 14:59:14", "cutoffdate": "2022-07-21 14:59:14", "notes1": null, "notes2": null, "notes3": null, "created_at": null, "updated_at": "2022-07-19T02:29:04.000000Z" }],
            teacher: 'oo',
            // classes: '',
            // classes: '',
            // classes: '',
            subjects      :[],
            teachers      :[],
            classnames    :[],
            students      :[],
            mix           :[],
            user           :[],

        };
    },
      props:['parent','dd'],
      
    

        computed : {
                  parentinchild() {
            return this.parent
        },
        user() {
            return this.$store.getters.user
        },
        verified() {
            return this.$store.getters.verified
        }
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

  // },
   methods: {
teacher1(){
  var searchIndex = this.datadb.teachers.findIndex((tea) => tea.id==this.teacher_id);
  this.teacher=this.datadb.teachers[searchIndex].namear
  // this.teacher=this.teachers[searchIndex].name
// return this.teachers[searchIndex]
//   if(this.teachers[searchIndex]){

//     this.count=0
// return this.teachers[searchIndex].name
//   }
//  this.count++
// return this.teachers[searchIndex]
},

// teacher(teacher_id){
//   const searchIndex = this.teachers.findIndex((tea) => tea.value===teacher_id);
//   if(this.teachers[searchIndex]){
// return this.teachers[searchIndex].name
//   }
// return null
// },
classname(class_id){},
subject(subject_id){},

     async   loadmix(){
    var msgin='loadmix'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
            await axios.post("/api/classSujects/loadmix2" ,)
            .then((res) => {
            this.datadb = res.data.message;
            this.datamsg = "...Done:";
            console.log('loadmix Done');
            this.loading = false;
                            });
            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
                        }
        // ----------------------------------------------------------
        setTimeout(() => this.datamsg = '', 4000);
},//loadmix

     suc(){
this.$store.commit('Toastsuccess')

     },
     conf(){
 swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  swal.fire('Saved!', '', 'success')
// this.$store.commit('Toastsuccess')
                } else if (result.isDenied) {
                  swal.fire('Changes are not saved', '', 'info')
                }
              })

     },
async   alert1(){
const { value: email } = await swal.fire({
  title: 'Input email address',
  input: 'email', html: '<a href="">Why do I have this issue?</a>',
  inputLabel: 'Your email address',
  inputPlaceholder: 'Enter your email address'
})

if (email) {
  swal.fire(`Entered email: ${email}`)
}


},

       
       alert2(){

swal('Hello Vue world!!!  1');
swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">Why do I have this issue?</a>'
})

swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    swal.fire('Changes are not saved', '', 'info')
  }
})




    swal.fire({
  position: 'top-end',
  icon: 'success',
  width:'180px',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})


       },
       async   savesubjectstodb(){

    //           this.toast.success("My toast content", {
    //           timeout:               1000
    //           });
    //    this.Toast.info("I'm an info toast!");
//       this.Toast
//     ('copied to clipboard', {
//   transition: "my-custom-fade",
//   maxToasts: 20,
//   newestOnTop: true
// } )








           var msgin='savesubjectstodb'
                   this.datamsg = msgin+"...";
                   this.loading = true;
       
                   var datadb
                   try{
       
                   await axios.post("/api/marks/all" )
                   .then((res) => {
                   this.datadb = res.data.message;
                   this.datatodb =this.datadb 
                   this.datamsg = msgin+"...Done";
                   this.loading = false;});
       
                   } catch (e) {
                   this.datamsg = msgin+"...error";
                   console.log(e);
                   alert(msgin+" ... error");}
       },
       async   update(){
           var msgin='update'
                   this.datamsg = msgin+"...";
                   this.loading = true;
       
                   var datadb
                   try{
       
                   await axios.post("/api/marks/update",this.datatodb )
                   .then((res) => {
                   this.datadb2 = res.data.message;
                   this.datamsg = msgin+"...Done";
                   this.loading = false;});
       
                   } catch (e) {
                   this.datamsg = msgin+"...error";
                   console.log(e);
                   alert(msgin+" ... error");}
       },

   }





}
</script>

<style scoped>

</style>