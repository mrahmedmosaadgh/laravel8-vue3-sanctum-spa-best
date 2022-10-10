<template>

<div class="max-w-screen-md mx-auto text-gray-900 svgcuser">
    <div class="flex justify-center">
        <div class="flex-1">
            <div class="border w-auto">
                <!-- <div  class="border p-4  font-semibold">Log In</div> -->
<!-- bg-white -->
                <div class="p-2 ">
                    

                    <Errors type="danger" v-if="errors" :content="errors" @close="errors=null" />

                    <!-- <form class="md:w-10/12 md:p-4 w-full mx-auto" @submit.prevent="login">
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center sm:justify-between">
                            <label for="Email" class="w-4/12 "> Email </label>
                            <input type="email" v-model="email" name="email" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm">
                            
                        </div>
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center sm:justify-between">
                            <label for="Password" class="w-4/12 "> Password </label>
                            <input type="password" v-model="password" name="password" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm ">
                        </div>
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center  sm:justify-end">
                            
                            <div class="sm:w-8/12 w-full mt-3 sm:mt-0">
                                <input type="checkbox" name="Remeber Me" class="mr-2" id="">
                                <label for="Remember me" >Remeber Me ?</label>

                            </div>
                        </div>
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center  sm:justify-end">
                            <div class="sm:w-8/12 w-full  flex justify-between items-center mt-3 sm:mt-0">
                                <div v-if="busy"  class="flex justify-center items-center p-2 px-6 rounded-sm text-white bg-blue-500 hover:bg-blue-600"> 
                                   <circle-svg class="w-6 h-6" />
                                </div>
                                <button v-else type="submit" class="p-3 rounded-sm text-white bg-blue-500 hover:bg-blue-600">Log In</button>
                                <router-link :to="{name : 'marks_register'}" class="text-sm text-blue-500 hover:underline"> New member ? Sing Up ! </router-link>
                            </div>
                        </div>
                        <div class="w-full my-1 sm:flex sm:justify-end">
                        <router-link :to="{name : 'forgot-password'}" class="text-sm text-gray-500 hover:text-gray-800 hover:underline "> Fogot your password ? </router-link>
                        </div>
                    </form> -->


         </div>
            </div>
        </div>
    </div>


















                    <form class="md:w-10/12 md:p-4 w-full mx-auto" @submit.prevent="login">


<div class="min-h-screen py-3 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Login To School Marks</h1>
				</div>
				<div class="divide-y divide-gray-200">
					<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<input autocomplete="off" id="email" name="email" type="text" v-model="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
							<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
						</div>
						<div class="relative">
							<input autocomplete="off" id="password" name="password"  v-model="password"  type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
							<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
						</div>
						<div class="relative">
							<!-- <button class="bg-blue-500 text-white rounded-md px-2 py-1">Submit</button> -->




                            <div class="sm:w-10/12 w-full    justify-between items-center mt-3 sm:mt-0">
                            <!-- <div class="sm:w-10/12 w-full  flex justify-between items-center mt-3 sm:mt-0"> -->
                                <div v-if="busy"  class="flex justify-center items-center p-2 px-6 rounded-sm text-white bg-blue-500 hover:bg-blue-600"> 
                                   <circle-svg class="w-6 h-6" />
                                </div>
                                <button v-else type="submit" class="p-3 rounded-sm text-white bg-blue-500 hover:bg-blue-600">Log In</button>
                                <router-link :to="{name : 'marks_register'}" class="text-sm text-blue-500 hover:underline"> New  ? Sing Up ! </router-link>
                            </div>









						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

                    </form>
















</div>

</template>



<script>
import CircleSvg from '../../components/CircleSvg.vue'
import { XIcon } from '@heroicons/vue/solid';
import Errors from '../../components/Errors.vue';
export default {
    components : {
        XIcon,
        CircleSvg,
        Errors,
    },
    data() {
        return {
            
            email : '' ,
            password : '' ,
            errors : null ,
            busy : false ,
            showin : true ,
        }
    },

    methods : {
        async login(){
            this.busy = true ;
            this.errors = null
            try {
                await this.$store.dispatch('login' , {'email' : this.email , 'password' : this.password})
                this.$router.push({name: 'marks_setup'})
            }
            catch (e){
                this.errors = e.data
            };
            this.busy = false ;

        }
    },

}
</script>
