<template>
    <div class="shadow-md bg-white ">
        <div class="max-w-screen-lg mx-auto flex justify-between">
            <div class=" p-4 ">
                

                <router-link class="font-semibold tracking-wider	text-lg " :to="{name : 'welcome'}">
                      Schooleverything
                </router-link> 
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " :to="{ name: 'home' }">
                    Home
                </router-link>

                <div class="dropdown ">
  <a class=" ">studentHome menu </a>
  <div class="dropdown-content">

                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'studentHome' }">
                    studentHome
                </router-link>



</div>
         </div> 


                <div class="dropdown ">
  <a class=" ">Teacher menu </a>
  <div class="dropdown-content">
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'quizcreate' }">
                    quiz create
                </router-link>
<router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'teachermain' }">
                    teachermain
                </router-link>

  </div>
</div>



                <div class="dropdown ">
  <a class=" ">admin menu </a>
  <div class="dropdown-content">
    <!-- <a href="#">Link 1</a> -->

                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'uploadexcel' }">
                    uploadexcel
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'excel1' }">
                    excel1
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'menu' }">
                    menu
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addclass' }">
                    addclass
                </router-link>

                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addteacher' }">
                    addteacher
                </router-link>
                                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addstudent' }">
                    addstudent
                </router-link>
                                                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'classteachersubject' }">
                    class teacher subject
                </router-link>




  </div>
</div>


<side-bar v-if="this.$route.name !== 'welcome'"></side-bar>
                
            </div>

            <div v-if="user" class="relative "  ref="dropMenu">
                <div @click="drop=!drop"  class=" flex items-center cursor-pointer p-4  font-semibold tracking-wider text-lg"> 
                    {{user.name}} 
                <ChevronDownIcon class="h-5 w-5 text-gray-700 ml-2 mt-1"></ChevronDownIcon>

                </div>

                <div v-if="drop" @click="drop=!drop" class="absolute bg-white border z-10 shadow-md flex w-auto flex-col ">
                    <router-link class="p-4 flex items-center" :to="{ name: 'settings' }">
                        <CogIcon class="h-6 w-6 text-gray-700 mr-2"></CogIcon>
                        Settings
                    </router-link>

                    <div @click="logout" class="p-4 flex  items-center cursor-pointer">
                        <LogoutIcon class="h-6 w-6 text-gray-700 mr-2"></LogoutIcon>

                        Logout
                    </div>
                </div>
            </div>

            <div v-else class="flex">
                <router-link class="p-4 tracking-widest flex items-center  text-gray-600" 
                    active-class="font-semibold text-gray-800" 
                    :to="{ name: 'login' }">
                        Login
                </router-link>
                <!-- <router-link class="p-4 tracking-widest flex items-center  text-gray-600" 
                    active-class="font-semibold text-gray-800" 
                    :to="{ name: 'register' }">
                        Register
                </router-link> -->

            </div>
        </div>

<!-- ------------------------------------------------------------------------------ -->




<div class="topnav"
:class="(togTopnav)?'responsive':''"
 id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content glass z9e">
 <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'uploadexcel' }">
                    uploadexcel
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'excel1' }">
                    excel1
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'menu' }">
                    menu
                </router-link>
                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addclass' }">
                    addclass
                </router-link>

                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addteacher' }">
                    addteacher
                </router-link>
                                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'addstudent' }">
                    addstudent
                </router-link>
                                                                <router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'classteachersubject' }">
                    class teacher subject
                </router-link>
<router-link active-class="font-semibold text-gray-900" v-if="user" class="px-6 text-gray-500 hover:text-gray-900 " 
                :to="{ name: 'teachermain' }">
                    teachermain
                </router-link>


    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon"  @click="togTopnav=!togTopnav">&#9776;</a>
</div>
<svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green"><path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path><path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path></svg>

<svg fill="red" class="fill-current text-blue-500 h-5 w-5" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
<svg fill="red" class="fill-current text-white h-5 w-5" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
<!-- <div style="padding-left:16px">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div> -->





<!-- ------------------------------------------------------------------------------ -->


















    </div>
</template>
<script>
import sideBar from './sideBar.vue'

import { CogIcon , LogoutIcon , ChevronDownIcon } from '@heroicons/vue/outline';

export default {
    data(){
return{
    togTopnav:false
}
    },
    created: function() {
        if(this.$store.getters.user) {
            let self = this ;   
            window.addEventListener('click', function(e){
                if ( self.$refs.dropMenu && !self.$refs.dropMenu.contains(e.target) ){
                    self.drop = false
                } 
            })
        }
    },

    components: { sideBar,CogIcon , LogoutIcon , ChevronDownIcon } ,
    data() {
        return {
            drop : false ,
        }
    },
    computed : {
        user() {
            return this.$store.getters.user ;
        }
    },
    methods : {
        async logout() {
            await this.$store.dispatch('logout');
            this.$router.push({name : 'login'});
        },

// function myFunction() {
//   var x = document.getElementById("myTopnav");
//   if (x.className === "topnav") {
//     x.className += " responsive";
//   } else {
//     x.className = "topnav";
//   }
// }
//   togfun() {
// this.myTopnav
//   if (x.className === "topnav") {
//     x.className += "topnav responsive";
//   } else {
//     x.className = "topnav";
//   }
// }





    }
}
</script>
<style scoped>

/* .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;z-index: 999999;}

.dropdown:hover .dropbtn {background-color: #3e8e41;} */
/* ------------------------------ */







body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: rgba(93, 82, 255, 0.786);

}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  /* background-color: rgb(201, 208, 255); */

  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: rgba(39, 25, 236, 0.786);

  color: white;
}

.dropdown-content a:hover {
    
  /* background-color: rgba(154, 193, 255, 0.786); */
color: rgb(255, 255, 255);
  /* color: black; */
}

.dropdown:hover .dropdown-content {
  display: block;overflow: hidden;
  z-index: 100;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;





  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn  {
    display: block;
    width: 100%;
    text-align: left;

  }

/* 
.icon {
  transition: transform 250ms, width 400ms;
  transition: transform 250ms, opacity 400ms;
}
.icon:hover {
  transform: scale(1.2);
  opacity: 0;
} */








}
</style>