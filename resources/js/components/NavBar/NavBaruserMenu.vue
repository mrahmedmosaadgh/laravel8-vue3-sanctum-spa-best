<template>

<!-- 
            <div v-if="user" class="relative "  ref="dropMenu">
                <div @click="drop=!drop"  class=" flex items-center cursor-pointer p-4  font-semibold tracking-wider text-lg"> 
                    {{user.name}} 
<img alt="Image" 
src="https://demo.bootstrapious.com/directory/1-0/img/avatar/avatar-5.jpg" 
class="avatar avatar-sm mr-12 ml-4">


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
 -->










<div class="dropdown     w-full">
  <div class=" dropbtn triangle-container">
                        <!-- {{user.name}}  -->
<!-- <img alt="Image" 
src="https://demo.bootstrapious.com/directory/1-0/img/avatar/avatar-5.jpg" 
class="avatar avatar-sm mr-12 ml-4"> -->
ssss



  </div>


  <div class="dropdown-content">

                     <router-link
                      v-for="(rout,index) in myrouts" :key="index"
                      active-class=" font-semibold text-gray-900"
                       class="ar px-6 text-gray-500 hover:text-gray-900 " 
                       :to="rout.name">
                       {{rout.title}}
                     </router-link>

                    <router-link class="ar p-4 flex items-center" :to="{ name: 'settings' }">
                        <!-- <CogIcon class="h-6 w-6 text-gray-700 mr-2"></CogIcon> -->
                        Settings
                    </router-link>

                    <div @click="logout" class="ar p-4 flex  items-center cursor-pointer">
                        <!-- <LogoutIcon class="h-6 w-6 text-gray-700 mr-2"></LogoutIcon> -->

                        Logout
                    </div>

  </div>


</div>



</template>

<script>
export default {
  name: 'NavBarstudent',

  data() {
    return {
myrouts:[
 { name:{ name: 'uploadexcel' }, title:'upload excel'},
//  { name:{ name: 'uploadexcel2' }, title:'upload excel22'},
],

    };
  },

  methods: {
            async logout() {
            await this.$store.dispatch('logout');
            this.$router.push({name : 'login'});
        },
  },

};
</script>

<style scoped>


.avatar {
    display: inline-block;
    position: relative;
    width: 3rem;
    height: 3rem;
    text-align: center;
    border: #dee2e6;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 1rem rgb(0 0 0 / 15%);
    line-height: 3rem;
    cursor: pointer;
}
.avatar:hover {
box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
.avatar.avatar-sm {
    width: 2rem;
    height: 2rem;
}

</style>