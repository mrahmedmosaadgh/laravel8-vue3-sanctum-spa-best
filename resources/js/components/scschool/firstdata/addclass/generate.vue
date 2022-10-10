<template lang="">
    <div>
       generate 


       <!-- ----------------------------------------------------------------------- -->

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="  bg-blue-500 overflow-hidden text-center">
        <table class="m-auto w-11">
        <!-- <table class="min-w-full"> -->
          <thead class="bg-white border-b border">
            <tr>
              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                Grades
              </th>
              <th scope="col" class="text-sm border font-medium text-gray-900 px-6 py-4 text-left">
                Nunmber
              </th>
 
            </tr>
          </thead>
          <tbody>

<!-- 
   v-for="(menuitem,index) in gradesnames" :key="index"
  >
   <td>{{menuitem }}</td>
   <td>
               <input type="number"  
              min="0" max="11"  
             v-model="gradesnames_classcount[index]"  class=" text-center bg-green-200  w-9 h-7 "  :name="'radio'+index">
         -->


            <tr 
             v-for="(menuitem,index) in gradesnames" :key="index"
            
            class="bg-white border  transition duration-300 ease-in-out hover:bg-gray-100">
              
              
              <td class="px-6 py-4 border whitespace-nowrap text-sm font-medium text-gray-900">
                {{menuitem }}
              </td>
              <td class="text-sm border text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               <input type="number"  
              min="0" max="11"  
             v-model="gradesnames_classcount[index]"  class=" text-center  w-9 h-5 "  :name="'radio'+index">
              </td>
              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>












 
<br> <button @click="classescreate">classescreate</button><br> 

<div v-if="this.classessnamesarray!=[]">
  {{this.classessnamesarray}}
  <div v-for="(grade,index) in gradesnames" :key="index">
    <span v-for="(gradenum,index2)  in parseInt(gradesnames_classcount[index])"
      :key="index2">{{grade}}{{classesnamesletters[index2]}}
      {{ (parseInt(gradesnames_classcount[index])!=index2+1) ? '-' : ''}}</span>
    <br>
  </div>
  <button @click="saveclasses">save class</button>
</div> 

<button @click="loadgradesdb">loadgradesdb</button>







<!-- ----------------------------------------------------------------------- -->


    </div>
</template>
<script>
export default {
    data() {
        return {
                        gradesnames: [1,2,3,4,5,6,7,8,9,10,11,12,'kg1','kg2','prekg'],
                        gradesnames_classcount: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                        classesnamesletters: ['A','B','C','D','E','F','G','H','I'],
                        classessnamesarray: [],
                        classessnamesarray_long: [],

        } 
    },

methods: {
    classescreate() {    
        //  =========== 
                this.classessnamesarray   =[]   
                     
            for (let i = 0; i < this.gradesnames.length; i++) {
            for (let ii = 0; ii < parseInt(this.gradesnames_classcount[i]); ii++) {
            let yy=this.gradesnames[i]+ this.classesnamesletters[ii]
            this.classessnamesarray.push(yy )
            }
            }
 
},//classescreate
    async saveclasses()  {
            alert(this.classessnamesarray)
            try {
              //  await axios.get('/api/menu') 
               await axios.post('api/class/create'
               , 
               {
                    classname: this.classessnamesarray,
              //       // description: this.description
               }
               )
               .then(function (response) {
                    // this.menuitems1  = response.data;
                      console.log(response.data)
                      console.log(response.data.message)
                })

          } catch(error) {
                console.log(error)
          }
            // this.loadgradesdb();
        },//saveclasses



     
    },


    
    
}
</script>
<style lang="">
    
</style>