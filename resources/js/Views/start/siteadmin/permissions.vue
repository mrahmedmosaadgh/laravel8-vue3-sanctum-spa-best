<template>
    <div> 
        <!-- <svg class="center-screen" v-if="loading" xmlns="http://www.w3.org/2000/svg" height="26" width="26" style="animation:spinLoadingIcon 1s steps(12,end) infinite"><style>@keyframes spinLoadingIcon{to{transform:rotate(360deg)}}</style><path d="M7 3V1s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z"/><path d="M4.63 4.1l-1-1.73S3.13 1.5 4 1c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.57-1.37-.37-1.37-.37z" fill-opacity=".93"/><path d="M3.1 6.37l-1.73-1S.5 4.87 1 4c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z" fill-opacity=".86"/><path d="M3 9H1S0 9 0 8s1-1 1-1h2s1 0 1 1-1 1-1 1z" fill-opacity=".79"/><path d="M4.1 11.37l-1.73 1S1.5 12.87 1 12c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z" fill-opacity=".72"/><path d="M3.63 13.56l1-1.73s.5-.87 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z" fill-opacity=".65"/><path d="M7 15v-2s0-1 1-1 1 1 1 1v2s0 1-1 1-1-1-1-1z" fill-opacity=".58"/><path d="M10.63 14.56l-1-1.73s-.5-.87.37-1.37c.87-.5 1.37.37 1.37.37l1 1.73s.5.87-.37 1.37c-.87.5-1.37-.37-1.37-.37z" fill-opacity=".51"/><path d="M13.56 12.37l-1.73-1s-.87-.5-.37-1.37c.5-.87 1.37-.37 1.37-.37l1.73 1s.87.5.37 1.37c-.5.87-1.37.37-1.37.37z" fill-opacity=".44"/><path d="M15 9h-2s-1 0-1-1 1-1 1-1h2s1 0 1 1-1 1-1 1z" fill-opacity=".37"/><path d="M14.56 5.37l-1.73 1s-.87.5-1.37-.37c-.5-.87.37-1.37.37-1.37l1.73-1s.87-.5 1.37.37c.5.87-.37 1.37-.37 1.37z" fill-opacity=".3"/><path d="M9.64 3.1l.98-1.66s.5-.874 1.37-.37c.87.5.37 1.37.37 1.37l-1 1.73s-.5.87-1.37.37c-.87-.5-.37-1.37-.37-1.37z" fill-opacity=".23"/></svg> -->
        <!-- <svg  class="center-screen" v-if="loading"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;" width="122px" height="122px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <path d="M20 25L80 25L80 75L20 75Z" fill="#b4eda8" stroke="#000000" stroke-width="1"></path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.5;0.501;1" values="M50 25L80 25L80 75L50 75;M50 25L50 20L50 80L50 75;M50 25L80 25L80 75L50 75;M50 25L80 25L80 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.5;0.5001;1" values="1;1;0;0"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.33s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="-0.166s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path><path d="M50 25L80 25L80 75L50 75" fill="#b4eda8" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-linecap="round">   <animate attributeName="d" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.499;0.5;1" values="M50 25L20 25L20 75L50 75;M50 25L20 25L20 75L50 75;M50 25L50 20L50 80L50 75;M50 25L20 25L20 75L50 75"></animate>   <animate attributeName="opacity" dur="1s" repeatCount="indefinite" begin="0s" keyTimes="0;0.4999;0.5;1" values="0;0;1;1"></animate> </path> </svg> -->
        <div class="fixed p-2 top-0 right-0 bg-green-200"><span>{{datamsg}}</span></div>


        <div  v-if="datadb">
        <button @click="editmood=!editmood"
        :class="(editmood)?'':'bg-red-500'"
        >edit mood ({{(editmood)?'ON':'OFF'}})</button>
        <div class="text-center">
        <button @click="permissionupdate()" v-if="editmood">save</button>
        </div>
        </div>


                   <table class='tbl1'> 
               <thead v-if="datadb">
                   <tr>
                       <th>N</th>
                       <th>name</th>
                       <th>display_name</th>
                       <th>description</th>
                    <th v-if="editmood" ></th>
                   </tr>
               </thead>
               <tbody>
                   <tr v-for="(item,index) in datadb" :key='index'>
                       <td>{{index+1}}</td>
                       <td>
                        <span v-if="!editmood">{{item.name}}</span>
                        <input class="text-black" type="text" :value="item.name" v-if="editmood"   @keyup.enter="permissionupdate()" >
                        </td>
                       <td>
                        <span v-if="!editmood">{{item.display_name}}</span>
                        <input class="text-black" type="text" :value="item.display_name" v-if="editmood"  >
                        </td>
                       <td>
                        <span v-if="!editmood">{{item.description}}</span>
                        <input class="text-black" type="text" :value="item.description" v-if="editmood"  >
                        <!-- <button  class="svg1"  @click="permissiondel(item.id)"  v-if="editmood" ></button> -->
                       

                        </td>
                        <td v-if="editmood" >
                        <svg   class="svg1" @click="permissiondel(item.id)"   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 	 viewBox="0 0 60.963 60.842" style="enable-background:new 0 0 60.963 60.842;" xml:space="preserve"> <path  d="M59.595,52.861L37.094,30.359L59.473,7.98c1.825-1.826,1.825-4.786,0-6.611 	c-1.826-1.825-4.785-1.825-6.611,0L30.483,23.748L8.105,1.369c-1.826-1.825-4.785-1.825-6.611,0c-1.826,1.826-1.826,4.786,0,6.611 	l22.378,22.379L1.369,52.861c-1.826,1.826-1.826,4.785,0,6.611c0.913,0.913,2.109,1.369,3.306,1.369s2.393-0.456,3.306-1.369 	l22.502-22.502l22.501,22.502c0.913,0.913,2.109,1.369,3.306,1.369s2.393-0.456,3.306-1.369 	C61.42,57.647,61.42,54.687,59.595,52.861z" /> </svg>

                        </td>
                   </tr>
                   <tr v-if="editmood" style="background-color:rgb(189, 236, 187)!important">
                    <td>Add new</td>
                    <td>
                        <input class="text-black" type="text"  v-if="editmood" v-model="newrowdb.name" required>
                    </td>
                                        <td>
                        <input class="text-black" type="text"  v-if="editmood" v-model="newrowdb.display_name" required>
                    </td>

                                        <td>
                        <input class="text-black" type="text"  v-if="editmood" v-model="newrowdb.description" required>
                    </td>
                    <td>
                        <svg   @click="permissionnew" class="svg2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 448l416-192L48 64v149.333L346 256 48 298.667z"/></svg>
                    </td>
                   </tr>
               </tbody>
           </table>

    </div>
</template>


<script>
import swal from 'sweetalert2'

export default {
    data() {
        return {

            loading: false,
            datamsg: '',
            gradesdb: '',
            datadb: '',
            resetdb: '',

            current_user:{},
            roles      :new Set(),
            permissions:new Set(),
            edit1:[],
            editmood:false,
            newrowdb:{
                name:'',
                display_name:'',
                description:'',
            }
        };
    },
created(){
            this.current_user=window.user
            window.user_roles.forEach(r => {
                this.roles.add(r.name)
            });
            window.user_permissions.forEach(p => {
                this.permissions.add(p.name)
            });
        },
mounted() {
                this.permissionsall()
        },
watch: {
                datamsg() {
            if (this.datamsg.length>0) {
            setTimeout(() => this.datamsg = '', 5000);
            }}
      },

methods: {
    async   permissionsall(){

                var msgin='permissionsall'
                this.datamsg = msgin+"...";
                this.loading = true;
                try{
                await axios.post("/api/permissionsall" )
                .then((res) => {
                this.datadb = res.data.message;
                this.datamsg = msgin+"...Done";
                this.loading = false;});
                } catch (e) {
                this.datamsg = msgin+"...error";
                console.log(e);
                alert(msgin+" ... error");}
                this.edit1=[]
                for (let index = 0; index < this.datadb.length; index++) {
                    this.edit1.push(false)
                }
    },//permissionsall
    async   permissiondel(id){

        if (confirm("Are you sure!") == false) {return}
            this.loading = true;
            try{
            await axios.post("/api/permissiondel" ,{id:id})
            .then((res) => {
            // datadb = res.data.message;
            this.$store.commit('swalmsg', {icon:'success',title:res.data.message,text:'',timer:2000});
            this.loading = false;});
            this.permissionsall();
            } catch (e) {
            this.$store.commit('swalmsg', {icon:'error',title:"permissiondel...err",text:'',timer:2000});
            console.log(e);}
        },//permissiondel
    async   permissionnew(){
        if(this.newrowdb.name==''){alert('required name');return}
        var msgin='permissionnew'
                this.datamsg = msgin+"...";
                this.loading = true;
                try{
                await axios.post("/api/permissionnew",this.newrowdb )
                .then((res) => {
                this.datadb = res.data.message;
                console.log(this.datadb);
                this.datamsg = msgin+"...Done";
                this.$store.commit('swalmsg', {
                    icon :'success',
                    title:'success:permissionnew',
                    text :'',
                    timer:2000,
                    bar  :false});

                this.loading = false;});
            this.permissionsall();
                            this.newrowdb={
                name:'',
                display_name:'',
                description:'',
            }
                } catch (e) {
                this.datamsg = msgin+"...error";
                console.log(e);
                alert(msgin+" ... error");}
    },//permissionnew

    async   permissionupdate(){
        var msgin='permissionnew'
                this.datamsg = msgin+"...";
                this.loading = true;
                try{
                await axios.post("/api/permissionupdate",this.datadb )
                // await axios.post("/api/permissionupdate",this.datadb[0] )
                .then((res) => {
                this.datadb = res.data.message;
                console.log(this.datadb);
                this.datamsg = msgin+"...Done";
                this.$store.commit('swalmsg', {
                    icon :'success',
                    title:'success:permissionnew',
                    text :'',
                    timer:2000,
                    bar  :false});

                this.loading = false;});
            this.permissionsall();
                this.newrowdb={
                name:'',
                display_name:'',
                description:'',
            }
                } catch (e) {
                this.datamsg = msgin+"...error";
                console.log(e);
                alert(msgin+" ... error");}

    },//permissionupdate
   }





}
</script>


<style scoped>

</style>