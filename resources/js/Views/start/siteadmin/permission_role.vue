<template>
    <div>
        <svg  class="center-screen" v-if="loading"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;" width="122px" height="122px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <path d="M20 25L80 25L80 75L20 75Z" fill="#b4eda8" stroke="#000000" stroke-width="1"></path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path> </svg>

        <div class="fixed p-2 top-0 right-0   bg-green-200">
            <span>{{datamsg}}</span>
        </div>
permission_role
resources\js\Views\start\siteadmin\permission_role.vue
<p>permission_role:{{datadb.permission_role}}</p>    
<!-- <p>datadb:{{datadb.permission}}</p>     -->
<!-- <p>datadb:{{datadb.role}}</p>     -->
<p>selectedrole:{{selectedrole}}</p>
<div>
    <button @click="permission_role_update()">permission_role_update</button>
         <select name="select"
         v-model="selectedrole"
         >
             <option
             v-for="(item,index) in datadb.role" :key='index'
              :value="item.id">{{item.display_name}}</option>
         </select>
<!-- <p>options:{{options}}</p>  <label class="typo__label">Tagging</label>tttttttttttttttt -->
  
  
 <p>    optionchoosenrole:{{optionchoosenrole}}</p> 
  
  
  
  
  
  
    <!-- <Multiselect
      v-model="roleid"
      placeholder="Select your character"
      label="name"
      trackBy="id"
      :options="datadb.role"
      :searchable="true"
    > -->
    <p>value:{{value}}</p>
    <p>selectedpermissions:{{selectedpermissions}}</p>
        <p>optionchoosenrole:{{optionchoosenrole}}</p>

    <!-- <Multiselect
     mode="tags"
      v-model="value"
      placeholder="Select your character"
      label="name"
      trackBy="value"
      :options="options"
      :searchable="true"
    > -->
    <!-- <Multiselect
     mode="tags"
      v-model="value"
      placeholder="Select"
      trackBy="value"
      label="name"
      :options="options"
      :searchable="true"
      :close-on-select="false"
    class="multiselect-blue2"
    > -->

    <Multiselect
     mode="tags"
      v-model="selectedpermissions"
      placeholder="Select"
      :options="options"
      :close-on-select="false"
    class="multiselect-blue2"
      :searchable="true"
    >
      <!-- <template v-slot:singleLabel="{ id }">
        <div class="multiselect-single-label">
          <img height="26" style="margin: 0 6px 0 0;" :src="value.icon"> {{ value.name }}
        </div>
      </template> -->

      <!-- <template v-slot:option="{ option }">
        <img height="22" style="margin: 0 6px 0 0;" :src="option.icon">{{ option.name }}
      </template> -->
    </Multiselect>
</div>ttttttttttt


    </div>
</template>

<script>
import 'animate.css';
import Multiselect from '@vueform/multiselect'

export default {
components: {
      Multiselect,
    },
    computed:{
optionchoosenpermission(){

    // -> array intersections in javascript//
//     var filteredArray = array1.filter(function(n) {
//     return array2.indexOf(n) !== -1;
// });


// -----------------------------------------------
// --filteer good best----------------------------
// -----------------------------------------------
if (this.datadb.permission) {
var array=this.selectedpermissions
    var filteredArray = this.datadb.permission.filter(function(n) {
        return array.indexOf(n.id) !== -1;
});
return filteredArray
        }
return null
},
optionchoosenrole(){

// if (this.datadb.permission_role) {
// var array=this.selectedpermissions
//     var filteredArray = this.datadb.permission.filter(function(n) {
//         return array.indexOf(n.id) !== -1;
// });
// return filteredArray
//         }
// return null






// let bigCities = cities.filter(function (e) {
//     return e.population > 3000000;
// });

if (this.datadb.permission_role) {

var selectedrole=this.selectedrole
let permissions = this.datadb.permission_role.filter(function (e) {
    return e.role_id == selectedrole;
});
var selectedpermissions=[]
permissions.forEach(element => {
selectedpermissions.push(element.permission_id)
});
this.selectedpermissions=selectedpermissions
return permissions
        }
return null





},



    },

    data() {
        return {

            loading: false,
            datamsg: '',
            datadb: '',
            selectedrole: [],
            selectedpermissions: [],
            editmood: false,
            roleid: null,
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
                    value: null,
        options: []
        };
    },
mounted() {
this.permission_role_load()
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
async   permission_role_load(){
    var msgin='permission_role'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{

            await axios.post("/api/permission_role" )
            .then((res) => {
            this.datadb = res.data.message;
            this.datamsg = msgin+"...Done";
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}

        this.options= []

          this.datadb.permission.forEach(element => {

this.options.push({ 
    value: element.id, 
    label: element.display_name
    })
          });


// let filter = 
//   json.homes.filter(d => 
  
//     d.price >= 1000 & 
//     d.sqft >= 500 & 
//     d.num_of_beds >=2 & 
//     d.num_of_baths >= 2.5
// )


},

async   permission_role_update(){
    var msgin='permission_role'
            this.datamsg = msgin+"...";
            this.loading = true;
            try{
var date={selectedpermissions:this.selectedpermissions,
selectedrole:this.selectedrole
}
            await axios.post("/api/permission_role_update",date )
            .then((res) => {
            this.datamsg = res.data.message;
            this.permission_role_load()
            this.loading = false;});

            } catch (e) {
            this.datamsg = msgin+"...error";
            console.log(e);
            alert(msgin+" ... error");}


// let filter = 
//   json.homes.filter(d => 
  
//     d.price >= 1000 & 
//     d.sqft >= 500 & 
//     d.num_of_beds >=2 & 
//     d.num_of_baths >= 2.5
// )


},





   }





}
</script>

<style src="@vueform/multiselect/themes/default.css">

</style>