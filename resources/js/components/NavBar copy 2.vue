<template>
  <div>

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
     <!-- SchoolEveryThing -->
     <marquee Scrollamount=2 direction="up" class=" w-full h-10">
      <p>
        <span class=" text-green-200">S</span> 
        <span class=" text-green-300">ch</span> 
        <span class=" text-blue-400">oo</span> 
        <span class=" text-green-200">l</span> 
        </p>
      <p  class=" text-green-300">Every</p>
      <p  class=" text-blue-400">Thing</p>
      </marquee>
      <!-- This text will scroll from bottom to top</marquee> -->
    </div><label class="switch">
      <input type="checkbox" checked>
      <span class="slider round"></span>
    </label>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  








<label class="switch_s">
  <input type="checkbox" checked>
  <span class="slider_s round"></span>
</label> 



<h2 class="head-style2">What is Sleep? yuyu uytiiuiuiuiuiuyiuyiuyiuyiuyiuyiuyi uyiuyi</h2>







  <div class="nav-links  z-50">
     <a href="#">    <NavBarAdminMenu  ></NavBarAdminMenu></a>

    <a href="//github.io/jo_geek" target="_blank">Github</a>
    <a href="http://stackoverflow.com/users/4084003/" target="_blank">Stackoverflow</a>
    <a href="https://in.linkedin.com/in/jonesvinothjoseph" target="_blank">LinkedIn</a>
    <a href="https://codepen.io/jo_Geek/" target="_blank">Codepen</a>
    <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">JsFiddle</a>
  </div>
</div>





  </div>
</template>

<script>
import sideBar from './sideBar.vue'
import NavBarAdminMenu from './NavBar/NavBarAdminMenu.vue'
import NavBarTeacherMenu from './NavBar/NavBarTeacherMenu.vue'
import NavBarStudentMenu from './NavBar/NavBarStudentMenu.vue'

import { CogIcon , LogoutIcon , ChevronDownIcon } from '@heroicons/vue/outline';

export default {
      components: { sideBar,
      CogIcon , LogoutIcon , ChevronDownIcon,
      NavBarAdminMenu,
      NavBarTeacherMenu,
      NavBarStudentMenu
      
      
      } ,
 
  data() {
    return {
      togTopnav:false,
       
    };
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

                      // var   lastPath = this.$router.options.history.state.back
                      if (!this.$router.options.history.state.back) {
                        this.rn ='/home'
                      }else{
                        this.rn =this.$router.options.history.state.back
                      }

    },


  mounted() {
    
  },

  methods: {
            async logout() {
            await this.$store.dispatch('logout');
            this.$router.push({name : 'login'});
        },
  },
    computed : {
        user() {
            return this.$store.getters.user ;
        }

      },
};
</script>

<style  scoped>
* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #4d4d4d;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>