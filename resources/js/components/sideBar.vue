<template>
<div >

<!-- openv:{{openv}} -->
<div style="z-index:999999999" :class="(openv)?'overlayc':'overlayo'"  @click="openv=!openv">--</div>
<div id="mySidenav" class="   lg: " :class="(openv)? ' sidenavc':' sidenavo'" >
<!-- <div id="mySidenav" class="sidenav  overlay " :class="(openv)? ' sidenavo':' sidenavc'" > -->
  <a href="javascript:void(0)" class="closebtn"  @click="openv=!openv">&times;</a>
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
  <a href="#">About</a>

<router-link :to="{ name: 'markmain' }"  @click="openv=!openv">markmain</router-link>


<a href="#">Clients</a>
<a href="#">Contact</a>

<div class="dropdown w-full">
  <a class=" w-full bg-gray-500">Contact</a>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>


<div class="dropdown w-full">
  <a class=" w-full bg-gray-500">Contact</a>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>





</div>
<span style="font-size:20px;cursor:pointer;padding-left: 20px;" @click="openv=!openv">&#9776; </span>
<!-- <div :class="(mainnav)?'mainnavo':'mainnavc'" >
   
  <span style="font-size:30px;cursor:pointer" onclick="openv()">&#9776; open</span>
</div> -->
</div>

</template>
<script>
// import { CogIcon , LogoutIcon , ChevronDownIcon } from '@heroicons/vue/outline';

export default {
    // created: function() {
    //     if(this.$store.getters.user) {
    //         let self = this ;   
    //         window.addEventListener('click', function(e){
    //             if ( self.$refs.dropMenu && !self.$refs.dropMenu.contains(e.target) ){
    //                 self.drop = false
    //             } 
    //         })
    //     }
    // },

    // components: { CogIcon , LogoutIcon , ChevronDownIcon } ,
    data() {
        return {
            openv : true ,
            mainnav:'mainnavo',
        }
    },
    // computed : {
    //     user() {
    //         return this.$store.getters.user ;
    //     }
    // },
    methods : {
// openNav() {
//     sidenavo
//   document.getElementById("mySidenav").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "250px";
//   document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
// },

// closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
//   document.getElementById("main").style.marginLeft= "0";
//   document.body.style.backgroundColor = "white";
// }
    }
}
</script>
<style scoped>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.sidenavo{
  width : 250px;
  /* margin-left: 250px; */
  background-color:rgb(39, 37, 37) ;
  /* background-color:rgba(0,0,0,0.4) ; */

    height: 100%;

  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;

  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
}
.sidenavc{
  width : 0px;
  margin-left: 0px;
  background-color:white;
    height: 100%;

  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

  overflow-x: hidden;
  transition: 0.1s;
  padding-top: 60px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.4s;
  padding-top: 60px;
}

.sidenavo a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenavo a:hover {
  color: #f1f1f1;
}

.sidenavo .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.mainnavo {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 250px;
}
.mainnavc {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 0px;
}


/* element.style {
    width: 100%;
    opacity: 0.8;
} */
.overlay3 {
    height: 100%;
    /* width: 0; */
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0, 0.9);
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
    opacity: 0;
    transition: opacity 1s;
}

.overlayo {
    height: 100%;
    /* width: 0; */
    position: fixed;
    z-index: 999999999;
    top: 0;
    left: 250px;
    background-color: rgba(0,0,0, 0.9);
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
    /* opacity: 0; */
    transition: opacity 1s;
    width: 100%; 
    opacity: 0.8;
}
.overlayc {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 999999999;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0, 0.9);
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
    opacity: 0;
    transition: opacity 1s;
}



@media screen and (max-height: 450px) {
  .sidenavo {padding-top: 15px;}
  .sidenavo a {font-size: 18px;}
}
.overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
/* ------------------------------------------- */

.dropdown {
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

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>