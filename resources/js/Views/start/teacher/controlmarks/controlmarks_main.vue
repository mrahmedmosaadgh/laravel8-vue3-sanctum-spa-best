<template>
    <div>
        Laravel8Vue3SanctumSpaBest3ControlmarksMain <br>
        <p>userid:{{$store.state.user.id}}</p>
        <p>usertype:{{$store.state.user.usertype}}</p>
        <p>teacher name:{{$store.state.user.nameen}}</p>
        <p>classname:{{$store.state.user.classname}}</p>
        <p>subjects:{{$store.state.user.subjects}}</p>
        <!-- <p>datadbmy.controlmarks:{{datadbmy['controlmarks']}}</p> -->
        controlmarks<p v-if="datadb!=null">datadbmy.controlmarks:{{datadb.data[0].mycontrolmarks}}</p>
        <!-- controlmarks<p v-if="datadbmy!=null">datadbmy.controlmarks:{{datadbmy.data[0].controlmarks}}</p> -->
        <p><button @click="datacontrolmarksfun()">datacontrolmarksfun</button></p>
<!-- "sub1": "10",
 "sub2": "12",
 "sub3": "14",
 "sub4": "16",
 "sub5": "18",
 "sub6": "20",
 "sub7": null, "sub8": null, "sub9": null, "sub10": null, "notes": "successed -->
<p>datadb{{datadb}}</p>


    </div>
</template>

<script>
export default {
    name: 'Laravel8Vue3SanctumSpaBest3ControlmarksMain',

    data() {
        return {
            datadb:null,
        };
    },

    mounted() {
        
    },

    methods: {
    async   datacontrolmarksfun(){
                this.$store.state.loading = true; // scschoolclassteachersubjects
                try{
                await axios.post("/api/teacher/datacontrolmarks" )
                .then((res) => {
                this.datadb = res.data;

                this.$store.state.loading = false;
                });
                } catch (e) {
                
                // alert(e.response.status);
                }
              },//fromdbfun
    },
};
</script>