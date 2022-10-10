<template>
  <div >
<div v-if="$store.state.loading" class="overlay_fullscrren  bg-black  z-50 "> <div class="bg_loading  overlay_fullscrren z99999 z-50"></div></div>
         <div v-if="$store.state.user!=null">
        <div v-if="this.$route.name !== 'welcome'"> 
            <NavBarmarks  v-if="$route.path.substring(0,6)=='/marks'" >error NavBarmarks</NavBarmarks>
            <nav-bar v-else>error nav-bar </nav-bar>
    </div>    </div>
        <!-- <VerifyNotice :id="id" v-if="(this.$route.name !== 'welcome') && id && !verified" /> -->
        <div>

          <router-view class="p-3 "  v-slot="{ Component }">
            <transition name="fade" mode="out-in" >
              <component :is="Component" />
            </transition>
          </router-view>
        </div>
        
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import NavBarmarks from '../Views/marks/NavBar_marks.vue'
import VerifyNotice from './VerifyNotice.vue'
export default {
    data(){
  return{

// loading:true,

  }
},  components : {
    NavBar,
    NavBarmarks,
    VerifyNotice
  },
  mounted(){
  //   if(this.$store.state.user.project_name=='forqan'&& this.$store.state.user.usertype=='teacher'){
  //  this.$router.push({name : 'teacherhome'});
     
  //   }
  setTimeout(() => this.loading=false, 900);

},
  computed : {
    id () {
      return this.$store.getters.id 
    },
    verified () {
      return this.$store.getters.verified 
    },


  },

  // watch: {
  //     '$route' (to, from) {
  //       document.title = to.meta.title || 'SchoolEveryThing'
  //     }
  //   },
  
}
</script>


<style>
[v-cloak] {display: none}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

</style>
