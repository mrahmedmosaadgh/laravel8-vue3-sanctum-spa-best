<template>
    <div>
        <!--  text-center-bg-blue-500------------------------------------------------------------------- -->
      
<!--  
<form 
@submit="formSubmit" 
method="post" 
class=" m-auto w-60 bg-blue-200  shadow-blue-200/50 border-2   p-7 rounded drop-shadow-lg"

>

  <div class="mb-6 ">
    <label for="text1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add class</label>
    <input type="text" :class='textclass' required > 
   </div>
 
                         classes

<label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
<select multiple="false" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected="">Choose </option>
  <option
  v-for="(menuitem,index) in itemsarray" :key="menuitem.id"
  >
  {{index}}:{{menuitem}}</option>

 
</select>





  <button 

  type="submit" 
  class="
    shadow-lg shadow-indigo-500/50
  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
  >Submit</button>
</form> -->

   <!-- menuitems1 -->
{{gradesnames}} <br>
{{gradesnames_classcount}} <br>

   <div
     v-for="(menuitem,index) in gradesnames" :key="index"
   >
<label :for="menuitem.id+index" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
{{menuitem }}

<select 
v-model="gradesnames_classcount[index]"
>

  <option
  v-for="index2 in 10" :key="index2"
  >
  {{index2}}</option>

</select>
</label>
 </div>

 

  

<br>
<button @click="classescreate">classescreate</button>

<br> 


<br> 

<!-- {{gradesnames}} <br>
{{gradesnames_classcount}} <br> -->
<div

v-if="this.classessnamesarray!=[]">
{{this.classessnamesarray}}


<div
v-for="(grade,index) in gradesnames" :key="index"
>


<span
v-for="(gradenum,index2)  in parseInt(gradesnames_classcount[index])" :key="index2"

>{{grade}}{{classesnamesletters[index2]}} {{ (parseInt(gradesnames_classcount[index])!=index2+1) ? '-' : ''}}</span>
<br>
</div>
<button @click="saveclasses">save class</button>

</div>











   <br>
   <label  for="checkall" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
 checkall

<input type="checkbox" name="list1"   id="checkall" 
@click="setall=!setall;menu1arrayid=new Array(menu1arrayid.length).fill(setall)" 



>
{{menu1arrayid}}
<!-- arr = new Array(3).fill(9) -->


</label>
   <br>  
   <div
     v-for="(menuitem,index) in menuitems1" :key="menuitem.id"
   >
<label :for="menuitem.id+index" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
{{menuitem.item}}

<input type="checkbox" name="list1"  :id="menuitem.id+index" :checked="menu1arrayid[index]"
v-model="menu1arrayid[index]"
> 
</label>
   </div>
<br> 


{{menuitems1}} <br>
{{menuitems2}}<br> 
{{menuitems3}}<br> 

<label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
<select multiple="true" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected="">Choose </option>
  <option
  v-for="(menuitem,index) in menuitems2" :key="menuitem.id"
  >
  {{index}}:{{menuitem.item}}</option>

 
</select>










      <!-- -------------------------------------------------------------------- -->
    </div>
</template>
<script>
export default {
   data() {

            return {
                
                 
              textclass:" shadow-lg shadow-indigo-500/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
,
              gradesnames: [1,2,3,4,5,6,7,8,9,10,11,12,'kg1','kg2','prekg'],
              gradesnames_classcount: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
              classesnamesletters: ['A','B','C','D','E','F','G','H','I'],
              name: '',
              classessnamesarray: [],
setall: false,
              description: '',

              output: '',
items: '',
aaraytrue: [true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true],
        menu1arrayid      : [false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false],
        aarayfalse     : [false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false],
              
              catalog1: 'grades',
              catalog2: 'classes',
              catalog3: 'classes',
              menuitems1: '',
              menuitems2: '',
              menuitems3: '',
              menuAllData:null

            };

        },
 mounted() {
            // alert('ff');
            this.menuall();
            // this.menu1();
            // this.menu2();
        },

        methods: {


                classescreate() {    
                 
// v-for="(grade,index) in gradesnames" :key="index"
// >


// <span
// v-for="(gradenum,index2)  in parseInt(gradesnames_classcount[index])" :key="index2"

// >{{grade}}{{classesnamesletters[index2]}} {{ (parseInt(gradesnames_classcount[index])!=index2+1) ? '-' : ''}}</span>
//  gradesnames.forEach(element => {
//   element

  
// for (let i = 0; i < cars.length; i++) {
//   text += cars[i] + "<br>";
// }



//  });
    //  =========== 
     this.classessnamesarray   =[]        
for (let i = 0; i < this.gradesnames.length; i++) {
  // text += cars[i] + "<br>";

for (let ii = 0; ii < parseInt(this.gradesnames_classcount[i]); ii++) {
  // text += cars[i] + "<br>";
let yy=this.gradesnames[i]+ this.classesnamesletters[ii]
this.classessnamesarray.push(yy )
}
console.log(this.classessnamesarray);
    //  ===========             

}

},
            formSubmit(e) {

                e.preventDefault();

                let currentObj = this;
                console.log([this.name, this.description,this.output  ])
return},
                
  async createPost()  {
    let url='api/class/all'
     const payload = {
          // userid: 42,
          // firstName: 'John',
          // lastName: 'Doe'
     }

     try {
          // axios automatically serializes the payload to JSON.
          // no need to JSON.stringify({ userid: 42, ...})
          const res = await axios.post(url, payload)
     } catch(error) {
          console.log(error)
     }
},

menu1() { 
      this.menuitems1 = response.data.filter(f => f.catalog === this.catalog1);//filter menusall
},
menu2() { 
      this.menuitems2 = response.data.filter(f => f.catalog === this.catalog2);//filter menusall
},
menu3() { 
      this.menuitems3 = response.data.filter(f => f.catalog === this.catalog3);//filter menusall
},


async menuall() {    
  // GET request using axios with async/await
  // const response = await axios.post("api/menu");
  const response = await axios.post("api/menupost");
  //  const response =               await axios.get("api/menu", {
                    // catalog: 'classes',
                    // description: this.description
                // })
  // const response = await axios.get("api/menu");
 
//   this.menus = response.data;
  // this.menusall = response.data;
  //   this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
    // this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
    // this.items = response.data;//filter menusall
const collection = response.data;
  this.items = collection;//filter menusall
      this.menuitems1 = collection.filter(f => f.catalog === this.catalog1);//filter menusall
 
  console.log(this.menuitems1)
      this.menuitems2 = collection.filter(f => f.catalog === this.catalog2);//filter menusall
 
   console.log(this.menuitems2)
      this.menuitems3 = collection.filter(f => f.catalog === this.catalog3);//filter menusall
   console.log(this.menuitems3)
  console.log('response.data')
  console.log(response.data)

    // this.items = response.data.filter(f => f.catalog === this.catalog1);//filter menusall
return;
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
// this.itemsarraydrag=this.itemsarray

 console.log(this.itemsarray);
},








           async menu12() {    
            //    await axios.post('http://localhost:8000/yourPostApi', {
            //         name: this.name,
            //         description: this.description
            //     })
            //     .then(function (response) {
            //         currentObj.output = response.data;
            //     })
            //     .catch(function (error) {
            //         currentObj.output = error;
            //     });


// api/class/all'   
// api/class/create'
// api/class/update'
// api/class/delete'
console.log('this.menuitems1')

     try {

              //  await axios.get('/api/menu') 
               await axios.post('/api/menu', {}) 
              
              //       // name: this.name,
              //       // description: this.description
              //  console.log('this.menuitems1') })
                .then(function (response) {
                    // this.menuitems1  = response.data;
                    // console.log(this.menuitems1)
                    console.log(response.data)
                })
                // .catch(function (error) {
                //     this.output = error;
                // });
          // axios automatically serializes the payload to JSON.
          // no need to JSON.stringify({ userid: 42, ...})
          // const res = await axios.post(url, payload)
     } catch(error) {
          console.log(error)
     }
  // GET request using axios with async/await
//   const response = await axios.get("api/menu");
// //   this.menus = response.data;
//   this.menusall = response.data;
//     this.catalogs = [...new Set(response.data.map(item => item.catalog))];//uniqe values
    // this.menus = response.data.filter(f => f.catalog === this.catalog);//filter menusall
    // this.menuitems1 = this.menuitems1.filter(f => f.catalog === this.catalog1);//filter menusall
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



// this.itemsarray=[];
// var index = 0;
// for (const key in this.items) {
//   if (this.items.hasOwnProperty(key)) {

// // this.itemsarray.push(this.items[key].item)
// this.itemsarray.push({
//   id:this.items[key].id,
//   item:this.items[key].item,
// })

//         index++;
//     }

   
// }
 
} 
}
}
</script>
<style>
    
</style>