<template>
    <div>
        <!--  text-center-bg-blue-500------------------------------------------------------------------- -->
      
 
<form @submit="formSubmit" method="post" 
 
class=" m-auto w-60
bg-blue-200  shadow-blue-200/50
  border-2  
 
  p-7 rounded drop-shadow-lg">
  <div class="mb-6 ">
    <label for="text1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
    <input type="text"   class="
    shadow-lg shadow-indigo-500/50 
    
    bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
  
    required="">
  <!-- placeholder="name@flowbite.com"  -->

  </div>
  <div class="mb-6">
    <label for="text2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
    <input type="text" class="
 shadow-lg shadow-indigo-500/50 
    
    bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
    required >
  </div>
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="true">
    </div>
    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
  </div>
  <button 

  type="submit" class="
    shadow-lg shadow-indigo-500/50
  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
 
      <!-- @click="formSubmit"   -->
      <!-- -------------------------------------------------------------------- -->
    </div>
</template>
<script>
export default {
   data() {

            return {

              name: '',

              description: '',

              output: ''

            };

        },

        methods: {

            formSubmit(e) {

                e.preventDefault();

                let currentObj = this;
                console.log(
[this.name, this.description,this.output  ]

              

             

              

            


                )
return
                this.axios.post('http://localhost:8000/yourPostApi', {

                    name: this.name,

                    description: this.description

                })

                .then(function (response) {

                    currentObj.output = response.data;

                })

                .catch(function (error) {

                    currentObj.output = error;

                });

            }
}
}
</script>
<style>
    
</style>