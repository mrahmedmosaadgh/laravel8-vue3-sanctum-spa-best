<template>
<div>


    <div class="border font-semibold w-full  p-4  flex items-center justify-between">
        Profile:{{user.name}}


        <!-- <div class="text-gray-600 text-sm font-medium">
            {{verified ? `Verified at : ${ moment(verified).format('MMMM Do YYYY, h:mm a')} ` : 'Not verified !'}}
        </div> -->

    </div>


    <div class="p-4 bg-white">

                    <Success  v-if="success" :content="success" @close="success=null" />

                    <Errors  v-if="errors" :content="errors" @close="errors=null" />









<!-- ------------------------------file avatar --------------------------------------------------------------------------- -->
        <div class="mx-12">avatar:
     <input  type="file" ref="fileInputavatar" class="hidden" accept="image/png, image/gif, image/jpeg"
       @input="pickavatar">

    <div>{{imgmsg}}

<div @click="selectavatar()"
    class=" flex flex-col  overflow-hidden select-none w-20 h-20 bg-green-500 cursor-pointer rounded-full border-2 border-blue-700 hover:shadow-lg" 
>
    <img  class="pointer-events-none w-20 h-20" :src="imgsrcavatar" alt="">

</div>

<span @click="upload_avatar_fun()"><i class="fa-solid fa-floppy-disk fabtn-blue"></i></span>

<div  :class="(show_progv)?'animate__animated animate__bounceIn':' hidden'">


    <div
       :class="(progressv==100)?'animate__animated animate__bounceOut':''"
         class=" bg-gray-200 w-20 my-5   z-50 rounded-full dark:bg-gray-700">
         <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full  " :style="'width: '+progressv+'%;'"  > {{ progressv}}%</div>
    </div>

</div>


</div>
            </div>
<!-- ------------------------------file avatar --------------------------------------------------------------------------- -->




















                    <!-- <div v-if="error" class="md:w-10/12 md:p-2 w-full mx-auto text-sm text-red-500 text-white text-center">
                        {{error}}
                    </div> -->

                    <form class="md:w-5/12 md:p-4 w-full mx-auto" @submit.prevent="update_profile">

                        <div v-for="(item,index) in schooldata" :key="index"

                         class=" w-full my-1 py-2 sm:flex  sm:items-center sm:justify-between">
                            <label :for="schooldata_title[index]" class="w-4/12 "> {{ schooldata_title[index] }}
                            
                             </label>
                            <!-- <input type="email"   name="email" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm"> -->
                            <input type="text" v-model="schooldata[index]" :name="schooldata_title[index]" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm">
                        </div>









                        <div   class=" w-full my-1 py-2 sm:flex  sm:items-center  sm:justify-end">
                            <div class="sm:w-8/12 w-full  flex justify-between items-center mt-3 sm:mt-0">
                                 <div v-if="busy"  class="flex justify-center items-center p-2 px-6 rounded-sm text-white bg-blue-500 hover:bg-blue-600">
                                   <circle-svg class="w-6 h-6" />
                                </div>
                                <button   v-else type="submit" class="p-3 rounded-sm text-white bg-blue-500 hover:bg-blue-600">Update</button>
                            </div>
                        </div>
                    </form>
<!-- <p>roles:{{roles}}</p>     v-if="permissions.has('profile-update')"


<p>permissions:{{permissions}}</p> -->
<!-- upload------------------ ----------------------- -->
<div>
  <div>
    <!-- <div
     :style="{ 'background-image': `url(${previewImage})` }"

      class="imagePreviewWrapper"

      
      
      
      
      @click="selectImage">
    </div> -->

<!-- 
     <div v-if="form.progress" class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none :class="'w-'+progress"rounded-full" :width="progress+' %'" :width="form.progress.percentage"> {{ form.progress.percentage }}%</div>
                                </div> -->v-if="progress"
================= <br>
<div>
            <p><button @click="reloadimage()">reloadimage</button></p>
</div>
<img v-if="imgsrc!=null" class="w-12" :src="imgsrc" alt="">
================= <br>
    <div
    
    class="imagePreviewWrapper relative "  @click="selectImage"
    >
       <div
       :class="(progress==100)?'animate__animated animate__bounceOut':''"
         class=" bg-gray-200 w-full my-5  absolute top-0 left-0 z-50 rounded-full dark:bg-gray-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full  " :style="'width: '+progress+'%;'"  > {{ progress}}%</div>
                                </div>




          <div :class="(progress==100)?'animate__animated  animate__fadeOut':(progress<5)?'':'animate__animated    animate__fadeIn'" class="  absolute z-10 flex items-center justify-center  overflow-hidden bg-white bg-opacity-40 rounded-full">
           
           
           
         <div class="flex">
<i :class="(progress==100)?'animate__animated animate__bounceIn':'animate__animated animate__bounceOut'" class="fa-solid fa-check-double text-green-500 text-3xl"></i>
<i :class="(progress==100)?'animate__animated animate__bounceOut':'animate__animated animate__bounceIn'" class="fa-solid fa-check  text-gray-300 text-3xl"></i>

</div>  
           
           
           
           
           
           
           
           
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle
                class="text-gray-300"
                stroke-width="10"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
                />


              <circle
                :class="(mypercent>50)?(mypercent>70)?'text-green-600':'text-blue-600':'text-red-600'"
                stroke-width="10"
                 :stroke-dasharray="circumference"
                :stroke-dashoffset="circumference - mypercent / 100 * circumference"
                stroke-linecap="round"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
               />
            </svg>
          <span class="absolute left-26 text-xl font-medium text-blue-600   sm:block">+{{mypercent}}%</span>
            <!-- <span class="absolute text-2xl text-blue-700" x-text="70%"></span> -->
            <!-- <span class="absolute text-2xl text-blue-700" x-text="`${percent}%`"></span> -->
          </div>







 <img :src="previewImage" :class="(previewImage)?' visible':' hidden dr'" alt=""   >

    </div>
        <p><button @click="handleSubmit()">handleSubmit()</button>{{imgmsg}}</p>
    <input
      ref="fileInput"
      type="file"
      accept="image/png, image/gif, image/jpeg" 
      @input="pickFile">
  </div>
</div>


























<!-- ---------------------------------------------------------------- -->
<details class="p-4 bg-white">
  <summary  class="border font-semibold  p-4 ">
 Password
  </summary>


                    <Success  v-if="success" :content="success" @close="success=null" />

                    <Errors v-if="errors" :content="errors" @close="errors=null" />

                    <form class="md:w-10/12 md:p-4 w-full mx-auto" @submit.prevent="update_pass">
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center sm:justify-between">
                            <label for="password" class="w-4/12 "> Password </label>
                            <input type="password" v-model="password"  name="password" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm ">
                        </div>
                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center sm:justify-between">
                            <label for="password confirmation" class="w-4/12 "> Confirm password </label>
                            <input type="password" v-model="password_confirmation" name="password_confirmation" class="border border-gray-300 bg-white sm:w-8/12 w-full p-2 mt-3 sm:mt-0 focus:outline-none rounded-sm">
                        </div>

                        <div class=" w-full my-1 py-2 sm:flex  sm:items-center  sm:justify-end">
                            <div class="sm:w-8/12 w-full  flex justify-between items-center mt-3 sm:mt-0">
                                 <div v-if="busy"  class="flex justify-center items-center p-2 px-6 rounded-sm text-white bg-blue-500 hover:bg-blue-600">
                                   <circle-svg class="w-6 h-6" />
                                </div>
                                <button v-else type="submit" class="p-3 rounded-sm text-white bg-blue-500 hover:bg-blue-600">Update</button>
                            </div>
                        </div>
                    </form>


</details>



    <!-- </div> -->
    </div>

    </div>
</template>

<script>
// import { MathJax } from 'mathjax-vue3'
// @vuemathjax
import { XIcon } from '@heroicons/vue/solid';
import Errors from '../../components/Errors.vue';
import Success from '../../components/Success.vue';
import moment from 'moment'
import CircleSvg from '../../components/CircleSvg.vue';
export default {
    components : {
        XIcon,
       Errors,
       Success,
        CircleSvg, 
        // MathJax,
    },
    data() {
        return {
            show_prog:false,
            show_progv:false,
            imgsrc:null,
            imgmsg:null,
            imgmsgv:null,
            imgsrcavatar:null,
            mypercent:0,
            mypercentv:0,
            toggleModal:false,
circumference: 50 * 2 * Math.PI,
            filedata:null,
            filedataavatar:null,
imgsrcavatarpre:null,
            progress:0,
            progressv:0,
            previewImage: null,
            latexStr:"",
            email :  '' ,
            name :  '',
            password :  '',
            password_confirmation :  '',
            
            errors : null,
            success : '' ,
            busy : false ,
schooldata:{
name:'',
email:'',
school_long_name:'',
phone:'',
mobile:'',
whatsapp:'',
facebook:'',
other:'',
Headmaster:'',
control_responsible:'',
notes:'',

},
schooldata_title:{
name               :'name',
email              :'email',
school_long_name   :'school_long_name',
phone              :'phone',
mobile             :'mobile',
whatsapp           :'whatsapp',
facebook           :'facebook',
other              :'other',
Headmaster         :'Headmaster',
control_responsible:'control_responsible',
notes:'notes',

},
      // current_user:{},
            // roles      :new Set(),
            // permissions:new Set(),
        }
    },
    computed : {
        user() {
            return this.$store.getters.user
        },
        verified() {
            return this.$store.getters.verified
        }
    },
            created(){
                this.imgsrc="/marks/logo/"+this.$store.getters.user.id+".jpg?"+Math.random()
                this.imgsrcavatar="/marks/avatar/"+this.$store.getters.user.id+".jpg?"+Math.random()
                
console.log('created');
// console.log(window.user);
// console.log(window.user_roles);
// console.log(window.user_permissions);
// this.current_user=window.user
// window.user_roles.forEach(r => {
//     this.roles.add(r.name)
// });
// window.user_permissions.forEach(p => {
//     this.permissions.add(p.name)
// });


        },
    methods : {
reloadimage(){

this.imgsrc="/marks/logo/"+this.$store.getters.user.id+".jpg?"+Math.random()
},
        
        // upload-------------------------------------------------------
              selectImage () {
                this.show_progv=true
          this.$refs.fileInput.click()
          this.progress=0
      },
              selectavatar () {

          this.$refs.fileInputavatar.click()
          this.progressv=0
      },
      
      pickavatar () {
        let input = this.$refs.fileInputavatar
        let file = input.files
        this.filedataavatar=file[0]
        console.log(file[0]);
        
        if (file && file[0]) {
          let reader = new FileReader
          reader.onload = e => {
            this.imgsrcavatar = e.target.result
            this.imgsrcavatarpre = e.target.result
          }
          reader.readAsDataURL(file[0])
          this.$emit('input', file[0])
        }
      },
      pickFile () {
        let input = this.$refs.fileInput
        let file = input.files
        this.filedata=file[0]
        console.log(file[0]);
        
        if (file && file[0]) {
          let reader = new FileReader
          reader.onload = e => {
            this.previewImage = e.target.result
          }
          reader.readAsDataURL(file[0])
          this.$emit('input', file[0])
        }
      },

           handleSubmit() {
      let data = new FormData();
    //   data.append("image", imageFile.value);//this.filedata
      data.append("image", this.filedata);//
      axios
        // .post("http://127.0.0.1:8000/api/upload-image", data)
        .post("/api/marks/storeImage", data, {
    onUploadProgress: progressEvent => {
        this.progress=Math.round(progressEvent.loaded / progressEvent.total*100)
        this.mypercent=Math.round(progressEvent.loaded / progressEvent.total*100)
        this.imgsrc="/marks/logo/"+this.$store.getters.user.id+".jpg?"+Math.random()

      console.log(Math.round(progressEvent.loaded / progressEvent.total*100))
    }
  })
        .then((response) => {
            console.log(response);
          this.imgmsg=  response.data.message
        //   imageUrl.value = "";
        //   imageFile.value = "";
        //   message.value = response.data.message;
        //   images.value = response.data.images;
        });
    },

           upload_avatar_fun() {
try {
      let data = new FormData();
    //   data.append("image", imageFile.value);//this.filedata
      data.append("image", this.filedataavatar);//
      axios
        // .post("http://127.0.0.1:8000/api/upload-image", data)
        
            

        .post("/api/marks/upladavatar", data, {
    onUploadProgress: progressEvent => {
        this.progressv=Math.round(progressEvent.loaded / progressEvent.total*100)
        this.mypercentv=Math.round(progressEvent.loaded / progressEvent.total*100)
        // this.imgsrcavatar="/marks/avatar/"+this.$store.getters.user.id+".jpg?"+Math.random()

      console.log(Math.round(progressEvent.loaded / progressEvent.total*100))
    }
  })
        .then((response) => {
            console.log(response);
          this.imgmsgv=  response.data.message
        //   imageUrl.value = "";
        //   imageFile.value = "";
        //   message.value = response.data.message;
        //   images.value = response.data.images;
        });


                } catch (error) {
            console.log(error);
            
        }
    },





        // upload-------------------------------------------------------

//         math1(){
// require('mathjax').init({
//   loader: {load: ['input/tex', 'output/svg']}
// }).then((MathJax) => {
//   const svg = MathJax.tex2svg('\\frac{1}{x^2-1}', {display: true});
//   console.log(MathJax.startup.adaptor.outerHTML(svg));
// }).catch((err) => console.log(err.message));
//         },

        async update_profile(){
            this.busy = true ;
            this.errors = null
            this.success = ''
            try {
                await this.$store.dispatch('marks_profile' , {'email' : this.schooldata.email , 'name' : this.schooldata.name,'notes':JSON.stringify(this.schooldata)})

                this.success = 'marks_profile updated successfully !'
            }
            catch (e){
                this.errors = e.data
            };
            this.busy = false ;

        },
                async update_pass(){
            this.busy = true ;
            this.errors = null 
            this.success = ''
            try {
                await this.$store.dispatch('password' , {'password' : this.password ,'password_confirmation' : this.password_confirmation})
                this.success = 'password updated successfully !'
                this.password = ''
                this.password_confirmation = ''
            }
            catch (e){
                this.errors = e.data
            };
            this.busy = false ;
            
        },
        moment: function () {
            return moment();
        }
    },


    mounted() {
        this.$store.state.loading=true
        this.schooldata.name = this.user.name
        this.schooldata.email = this.user.email
        if (this.user) {
            this.schooldata = JSON.parse(this.user.notes)
        }
this.$store.state.loading=false

    },


}
</script>
<style scoped  >
.imagePreviewWrapper {
    /* background: url(v-bind(previewImage)); */
    /* background: url(sweettexture.jpg); */
    /* background-image:v-bind(previewImage); */
    /* background-image:v-bind(url(previewImage)); */
    width: 250px;
    height: 250px;
    display: block;
    cursor: pointer;
    margin: 0 auto 30px;
    /* background-repeat: no-repeat; */
background-size: 200px 100px, cover;
    background-position: center center;
    /* background-size: cover; */
    border: solid #762C2C 1px;
    border-radius: 12px;
/* overflow: visible; */
/* }
-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
#demoObject { */

-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);



/* -webkit-box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 5px, #ff8000 0 -10px 5px, red 0 -10px 5px, 5px 5px 5px 5px rgba(0,0,0,0); 
box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 5px, #ff8000 0 -10px 5px, red 0 -10px 5px, 5px 5px 5px 5px rgba(0,0,0,0);
background: #ECEFCF; */
}
.imagePreviewWrapper:hover{
    /* -webkit-box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px, 5px 5px 15px 5px rgba(0,0,0,0); */

-webkit-box-shadow: 0px 10px 15px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0.356); 
box-shadow: 0px 10px 15px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0.253);

}

</style>