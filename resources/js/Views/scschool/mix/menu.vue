<template lang="">
    <div>
      <!-- <button >btn</button>
        menu -->
      itemsarray : <br>
   <br> 
{{itemsarray}}
     <br>     
        <button type="button" name="" id="" class="btn btn-primary  btn-lg btn-block"
        @click="menu1"
        
        >button</button>
        <button type="button" name="" id=""  
        @click="copyToClipboard"
        
        >  {{btntxtcopy}}</button>

        
<input type="" name="" value="aaaaaaa">
<!-- 
<br><br> {{catalogs}}
<br><br> {{items}}
<br><br> catalog :{{catalog}}
<br><br> itemscomp: {{itemscomp}} -->
<div class="form-group">
  <label for=""></label>
  <select 
  class="custom-select" 
  name="choosecatalog"
v-model="catalog"
  >

    <option
    v-for="(catalogitem,index) in catalogs"  
    :key="index"
    :value="catalogitem"
   
    >{{catalogitem}}</option>

  </select><br> 
<br>catalogitem:{{catalogitem}}
<br>






<br> 

<input name="" id="" class=" bg-yellow-400" type="text"  

v-model="txtnewitem"
>
 <br> 
 <br> 
  <select class="custom-select" name="choosecatalog"
  >

    <option
    v-for="(item,index) in itemscomp"  
    :key="index"
    :value="item.item"
   
    >{{item.item}}</option>

  </select>

<br>
 
</div>


<div
        v-for="(item,index) in itemscomp"  
    :key="index"
    class="custom-select" 

>
  <!-- :value="catalogitem" -->
  {{index}}:{{item.id}}:
  <input type="text" name="dd" 
  :value="item.item"
 
  >
  <input type="text" name="sss" 
 
  v-model.lazy="itemsarray[index].item"
  @change="updateitem(index)"
  >


  
   <button 
   type="button" 
   name=""  
   class="p-2 m-2 bg-green-400  btn-lg btn-block"
   @click="updateitem(index)"
   ></button>
 <button 
   type="button" 
   name=""  
   class="p-2 m-2 bg-red-700  btn-lg btn-block"
   @click="menudelete(index)"
   ></button>


   
{{catalogitem}}

</div>
<br> 

==================================================
draggablev-model="itemscomp"v-model="itemsarray" v-model="itemsarray"
      <draggable
        class="list-group"
        tag="transition-group"
        :component-data="{
          tag: 'ul',
          type: 'transition-group',
          name: !drag ? 'flip-list' : null
        }"
        v-model="itemsarraydrag"
        v-bind="dragOptions"
        @start="drag = true"
        @end="drag = false"
        item-key="id"
        
      > 
      
      <!-- item-key="id" -->
        
        <template #item="{ element }">
          <li class="list-group-item">
            <i
              :class="
                element.fixed ? 'fa fa-anchor' : 'glyphicon glyphicon-pushpin'
              "
              @click="element.fixed = !element.fixed"
              aria-hidden="true"
            ></i> 
            <div class="  float-none  p-3 ">
<!-- <div class=" float-left">{{ element.id }}:{{ element.order }}:{{ element.name }}</div> -->
<div class=" float-left">{{ element.id }}:{{ element.itemorder }}:{{ element.item }}</div>
           
    <div class="  float-right">





<svg width="22px" height="22px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="22" height="22" fill="gray" fill-opacity="0.01"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M19 10.3075C19 12.6865 17.2091 14.615 15 14.615C12.7909 14.615 11 12.6865 11 10.3075C11 7.92854 12.7909 6 15 6C17.2091 6 19 7.92854 19 10.3075ZM15 28.615C17.2091 28.615 19 26.6865 19 24.3075C19 21.9285 17.2091 20 15 20C12.7909 20 11 21.9285 11 24.3075C11 26.6865 12.7909 28.615 15 28.615ZM15 42.615C17.2091 42.615 19 40.6865 19 38.3075C19 35.9285 17.2091 34 15 34C12.7909 34 11 35.9285 11 38.3075C11 40.6865 12.7909 42.615 15 42.615Z" fill="gray"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M37 10.3075C37 12.6865 35.2091 14.615 33 14.615C30.7909 14.615 29 12.6865 29 10.3075C29 7.92854 30.7909 6 33 6C35.2091 6 37 7.92854 37 10.3075ZM33 28.615C35.2091 28.615 37 26.6865 37 24.3075C37 21.9285 35.2091 20 33 20C30.7909 20 29 21.9285 29 24.3075C29 26.6865 30.7909 28.615 33 28.615ZM33 42.615C35.2091 42.615 37 40.6865 37 38.3075C37 35.9285 35.2091 34 33 34C30.7909 34 29 35.9285 29 38.3075C29 40.6865 30.7909 42.615 33 42.615Z" fill="gray"/>
</svg>    </div>           
 </div>
          </li>
        </template>
      </draggable>
      
    <!-- </div> -->
<!-- <div
v-for="item in list" :key="item"
>
{{item.order}} 
</div> -->

<div
v-for="(item,index) in itemsarraydrag" :key="index"
>
{{index+1}}:{{item.itemorder}}:{{item.item}}
</div>

 
    <!-- <rawDisplayer class="col-3" :value="list" title="List" /> -->
  <!-- </div> -->
<!-- </template> -->
draggable
==================================================


<br>
<p class="bg-green-700">
  {{success}}

</p>
<!-- {{itemsarray}} -->
<br> 
userdata.name:{{ userdata.name }}
<!-- auth()->user()->name -->
<!-- <p class="lead text-muted">{{ userdata }}</p>
<p class="lead text-muted">{{ userdata.id }}</p>
<p class="lead text-muted">{{ userdata.name }}</p> -->
<br> 
==========================================

<div class="card">
                    <div class="card-header">Create new post</div>
                    <div class="card-body">
                        <p id="success"
                        
                        v-html="success"
                        ></p>
<!-- v-model="success" -->

                        <form @submit.prevent="addNewPost">
                         <input type="text" name="title"  >
                         
                         
                         
                            <!-- <input type="text" name="title" v-model="newPost">
                            <input type="text" name="title" v-model="newPost">
                            <input type="text" name="title" v-model="newPost"> -->
                            <input type="submit" value="Submit" class="bg-green-400">
                        </form>
                    </div>
                </div>
 <button lass="bg-green-400 w-22" @click="menu1" >menu1</button>   
==========================================
    </div>
</template>
<script>
import draggable from "vuedraggable";

import Swal from 'sweetalert2'
// import { useToast } from "vue-toastification";
 import Toast, { POSITION , useToast } from "vue-toastification";
//  import { useToast } from "vue-toastification";
//  import Toast, { POSITION } from "vue-toastification";

// import Toast from "vue-toastification";
// Import the CSS or use your own!
// import "vue-toastification/dist/index.css";
// import  ModelSelect   from 'vue-search-select'
// import { ModelSelect } from 'vue-search-select'
// import ButtonCounter from './ButtonCounter.vue'
// import 'vue-search-select/dist/VueSearchSelect.css'
export default {
  name: "transition-example-2",
  display: "Transitions",
  order: 7,
  components: {
    draggable,
    // rawDisplayer<input type="text" :class='textclass' required > classes
  },
      setup() {
      // Get toast interface
      const toast = useToast();

      // Use it!
      // toast("I'm a toast!");

      // or with options
      // toast.success("My toast content", {
      //   timeout: 2000
      // });
      // These options will override the options defined in the "app.use" plugin registration for this specific toast

      // Make it available inside methods
      return { toast }
    },
  // components: {
  //   VueSelect
  // },
 

// async function mounted() {


// }
 mounted() {
            // alert('ff');
            this.menu1();
        },

// mounted:{
// menu1()
// },
computed: {

dragOptions() {
      return {
        animation: 200,
        group: "description",
        disabled: false,
        ghostClass: "ghost"
      };
    },

    itemscomp() {    
//   // GET request using axios with async/await
//   const response = await axios.get("api/menu");
// //   this.menus = response.data;
//   this.menusall = response.data;
//     this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
//     this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
//     this.items = response.data.filter(f => f.catalog === this.catalog);//filter menusall
// const unique = [...new Set(array.map(item => item.age))];//uniqe values
// this.users =
//         val != "All"
//           ? this.fetchedUsers.filter(f => f.mainLanguage === val)
//           : this.fetchedUsers;
console.log(this.menusall)
if (this.menusall==null) {
  // alert('this.items==null')
  return
}
let dd=this.menusall.filter(f => f.catalog === this.catalog);
//  alert( this.items )
console.log(this.catalog)
console.log(this.menusall)
this.itemsarray=[];
var index = 0;
for (const key in dd) {
  if (dd.hasOwnProperty(key)) {

this.itemsarray.push({
  id:dd[key].id,
  item:dd[key].item,
})


        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        index++;
    }  }

return  dd;
 
}
},

created() {
        axios.post('/api/test').then( (response) => {
            console.log(response);
            this.userdata=response.data
            // console.log(response.data.data.id);
            // console.log(response.data.data.name);
        });
},




  // ----------------------------
data() {
    return {
 list: [
        { name: "John",     id: 0, order: 1 },
        { name: "Joao",     id: 1, order: 2 },
        { name: "Jean",     id: 2, order: 3 },
        { name: "Jeaddn",   id: 3, order: 4 },
        { name: "Jeaffn",   id: 4, order: 5 },
        { name: "Jeccggan", id: 5, order: 6 },
      ],


     



      drag: false,
      userdata:'',
itemsarray:[],
itemsarraydrag:[],
      // ---------------------------------------

// optionsw: [
//           { value: '1', text: 'aa' + ' - ' + '1' },
//           { value: '2', text: 'ab' + ' - ' + '2' },
//           { value: '3', text: 'bc' + ' - ' + '3' },
//           { value: '4', text: 'cd' + ' - ' + '4' },
//           { value: '5', text: 'de' + ' - ' + '5' }
//         ],
//         itemw: {
//           value: '',
//           text: ''
//         },
//         options2: [
//           { value: '1', text: 'aa' + ' - ' + '1' },
//           { value: '2', text: 'ab' + ' - ' + '2' },
//           { value: '3', text: 'bc' + ' - ' + '3' },
//           { value: '4', text: 'cd' + ' - ' + '4' },
//           { value: '5', text: 'de' + ' - ' + '5' }
//         ],
//         item2: '',

      // ---------------------------------------
        success:null,
        txtnewitem:null,
        menusall:null,
        // menus:null,
        items:null,
        catalog:'usertypes',
        catalogs:null,
        catalogitem:null,
        btntxtcopy:'copy',
    }
},
    methods:{
    sort() {
      this.list = this.list.sort((a, b) => a.order - b.order);
    },

menudelete(index){
alert(this.itemsarray[index].id+" :"+this.itemsarray[index].item)
  if (this.itemsarray[index].item==null) {
    alert('item==null')
    return
  }
  console.log(`menudelete`);
                axios.post('/api/menudelete',{
                  id  : this.itemsarray[index].id,
                  // item: this.itemsarray[index].item,
                  // notes1: 'edit by:',
                    
                   })
                .then((response)=>{

                  console.log(response.data.message);
                this.success=response.data
                // $('#success').html(response.data.message)
                this.menu1()
                }) 

                console.log(
                  this.success
                  );
                },

updateitem(index){
  alert(this.itemsarray[index].id+" :"+this.itemsarray[index].item)
  // if (this.catalog==null) {
  //   alert('this.catalog==null')
  //   return
  // }
  if (this.itemsarray[index].item==null) {
    alert('item==null')
    return
  }
  
  console.log(`addNewPost`);
                axios.post('/api/menuupdate',{
                  id  : this.itemsarray[index].id,
                  item: this.itemsarray[index].item,
                  // item: this.itemsarraydrag[index].item,
                  // itemorder: index,
                  // itemorder: this.itemsarraydrag[index].itemorder,
                  notes1: 'edit by:',
                    
                   })
                .then((response)=>{

                  console.log(response.data.message);
                this.success=response.data
                // $('#success').html(response.data.message)
                this.menu1()
                }) 

                console.log(
                  this.success
                  );
                },


addNewPost(){
  if (this.catalog==null) {
    alert('this.catalog==null')
    return
  }
  if (this.txtnewitem==null) {
    alert('this.txtnewitem==null')
    return
  }
  
  console.log(`addNewPost`);
                axios.post('/api/menu',{
                  catalog: this.catalog,
                  item: this.txtnewitem,
                  notes1: 'this.newPostllll',
                    
                   })
                .then((response)=>{

                  console.log(response.data.message);
                this.success=response.data
                // $('#success').html(response.data.message)
                this.menu1()
                }) 

                console.log(
                  this.success
                  );
                },
 
copyToClipboard() {
 
  // const copyText = document.getElementById('textToBecopied').textContent
  // const textArea = document.createElement('textarea')
  // textArea.textContent = copyText
  // document.body.append(textArea)
  // textArea.select()
  // document.execCommand('copy')
 
// catalog.execCommand('copy')
navigator.clipboard.writeText(this.catalog)
// navigator.clipboard.writeText(text)
    .then(() => {
      // setTimeout(this.btntxtcopy='', 2000);
      this.btntxtcopy=`"${this.catalog}" copied !`;
      //        toast.success("My toast content", {
      //   timeout: 1000
      // });
      //  Toast.info("I'm an info toast!");
//       this.Toast
//     ('copied to clipboard', {
//   transition: "my-custom-fade",
//   maxToasts: 20,
//   newestOnTop: true
// } ) 
      this.toast.success('copied to clipboard', 
      { 
        timeout: 1000,
        //  transition: "fade",fade-move
        TRANSITION: 'fadeIn' ,
        // transition: "my-custom-fade",
          closeButton: false,
          position: POSITION.TOP_CENTER,
          //  rtl: true,
            transition: "fade",
  maxToasts: 20,
  newestOnTop: true
          //  transition: "Vue-Toastification__bounce",
          // position: POSITION.TOP_LEFT
       });
       this.toast("I'm a toast!", {
      //  this.$toast("I'm a toast!", {
        // transition: "Vue-Toastification__bounce",
            transition: "fade",

  position: "top-right",
  timeout: 1853,
  closeOnClick: true,
  pauseOnFocusLoss: true,
  pauseOnHover: true,
  draggable: true,
  draggablePercent: 0.6,
  showCloseButtonOnHover: false,
  hideProgressBar: false,
  closeButton: "button",
  icon: true,
  rtl: false
});
      //  this.toast.info("I'm an info toast!");
       // Using Font Awesome icons
// this.toast('Icons are awesome!', { icon: 'fas fa-rocket' });

// Using Material Icons
// this.toast('Material icons!', {
//   icon: {
//     iconClass: 'material-icons',  // Optional
//     iconChildren: 'check_circle', // Optional
//     iconTag: 'span'               // Optional
//   }
// });
      // setTimeout("alert('Hello')", 1000);
      // setTimeout("this.btntxtcopy=' was copied to clipboard.'", 2000);
     
     setTimeout(() => this.copytxtmsgnullfun(), 1000) 
    //  setTimeout("this.btntxtcopy=''", 3000);
      // setTimeout(this.btntxtcopy="",4000);

Swal.fire({
  position: 'top-end',
  icon: 'success',
  // title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1000
})
      console.log(`was copied to clipboard.`);
    })
    .catch((err) => {
setTimeout("this.btntxtcopy='Error copying text to clipboard:'", 2000);

      console.error(`Error copying text to clipboard: `);
    });
    // setTimeout(this.btntxtcopy='', 2000);

},
copytxtmsgnullfun() {  
this.btntxtcopy='copy'
// this.btntxtcopy=" was copied to clipboard."
},
 
// async created() {
async menu1() {    
  
console.log('menu1')
 
  // GET request using axios with async/await
  const response = await axios.post("api/menupost");
  // const response = await axios.get("api/menuget");
//   this.menus = response.data;
  this.menusall = response.data;
    this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
    // this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
    this.items = response.data.filter(f => f.catalog === this.catalog);//filter menusall
// const unique = [...new Set(array.map(item => item.age))];//uniqe values
// this.users =
//         val != "All"
//           ? this.fetchedUsers.filter(f => f.mainLanguage === val)
//           : this.fetchedUsers;


// foreach (   itemee  in  this.items) {

//   // this.itemsarray=item.id
// this.itemsarray.push( itemee.id)
//   // if (Object.hasOwnProperty.call(object, key)) {
//   //   // const element = object[key];
   
//   // }
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }

// const initialBoard = []
// for (var i = 1; i <= 50; i++) {
//   initialBoard.push({number: i, isclicked: false});
// }
//  var index = 0;
// for (const key in user) {
//   if (user.hasOwnProperty(key)) {
//         console.log(`Index: ${index}, ${key}: ${user[key]}`);
//         index++;
//     }
// }



this.itemsarray=[];
var index = 0;
for (const key in this.items) {
  if (this.items.hasOwnProperty(key)) {

// this.itemsarray.push(this.items[key].item)
this.itemsarray.push({
  id:this.items[key].id,
  item:this.items[key].item,
})

        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        // console.log(`Index: ${index}, ${key}: ${user[key]}`);
        index++;
    }

   
}
this.itemsarraydrag=this.itemsarray

 console.log(this.itemsarray);
}




    } }
    
 
</script>
<style>
     button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
select {
 
  background-color: #d2ffd3;
  padding: 2px 5px;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  border: 1px solid  black;
  border-radius: 4px;
}
 

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
   
  }
}
@keyframes fadeOut {
  from {
    opacity: 1;
    
  }
  to {
    opacity: 0;
  }
}
.fade-enter-active {
  animation-name: fadeIn;
  animation-duration: 750ms;
  animation-fill-mode: both;
}
.fade-leave-active {
  animation-name: fadeOut;
  animation-duration: 750ms;
  animation-fill-mode: both;
}
.fade-move {
  transition: background-color 0.5s ease;
  transition-timing-function: ease-in-out;
  transition-property: all;
  transition-duration: 400ms;
  
}
 
.button {
  margin-top: 35px;
}

.flip-list-move {
  transition: transform 0.5s;
}

.no-move {
  transition: transform 0s;
}

.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}

.list-group {
  min-height: 20px;
}

.list-group-item {
  cursor: move;
}

.list-group-item i {
  cursor: pointer;
}







.col-6 {
    -ms-flex: 0 0 50%;
    -webkit-box-flex: 0;
    flex: 0 0 50%;
    max-width: 50%;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
 
div {
    display: block;
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}





.list-group-item+.list-group-item {
    border-top-width: 0;
}
 
.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}



</style>