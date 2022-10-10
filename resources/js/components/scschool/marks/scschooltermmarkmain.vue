<template>
    <div>
        <div class="fixed p-2 top-0 right-0   bg-green-200">
            <span>{{datamsg}}</span>
        </div>
scschooltermmarkmain com
<br>
<button @click="alert1">alert1</button> <br>
<button @click="alert2">alert2</button> <br>
<button @click="suc">suc</button> <br>
<button @click="conf">conf</button> <br>
<button @click="savesubjectstodb">datadb</button>
<!-- {{datadb}} -->
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
    </div>
</template>

<script>
import swal from 'sweetalert2'

export default {
    data() {
        return {

            loading: '',
            datamsg: '',
            gradesdb: '',
            datadb: [],
            datatodb: [],
            datadb2: [],
            // datadb3: [{ "id": tt, "schoolgroup_id": 1, "school_id": 1, "scschoolclassteachersubject_id": 1, "teacher_id": 1, "class_id": 1, "subject_id": 1, "term": "1", "stage": "prim", "markname": "ar,en,sc,sse,ssa,ddd,ddd,ddd,ddd", "markfull": "100,100,100,100,100", "markmin": null, "publishdate": "2022-07-19 14:59:14", "cutoffdate": "2022-07-21 14:59:14", "notes1": null, "notes2": null, "notes3": null, "created_at": null, "updated_at": "2022-07-19T02:29:04.000000Z" }],
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
const { value: email } = await this.$swal.fire({
  title: 'Input email address',
  input: 'email', html: '<a href="">Why do I have this issue?</a>',
  inputLabel: 'Your email address',
  inputPlaceholder: 'Enter your email address'
})

if (email) {
  this.$swal.fire(`Entered email: ${email}`)
}


},

       
       alert2(){

this.$swal('Hello Vue world!!!  1');
this.$swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">Why do I have this issue?</a>'
})

this.$swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    this.$swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    this.$swal.fire('Changes are not saved', '', 'info')
  }
})




    this.$swal.fire({
  position: 'top-end',
  icon: 'success',
  width:'180px',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

const Toast = this.$swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', this.$swal.stopTimer)
    toast.addEventListener('mouseleave', this.$swal.resumeTimer)
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