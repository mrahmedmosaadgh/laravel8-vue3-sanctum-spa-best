<template>
    <div>
        resources\js\Views\start\teacher\quiz\quizcreate.vue
                <p><button @click="getquizzesfun()">getquizzesfun</button></p>
                <p v-if="quizdata!=null">{{quizdata[0].answers[0]}}</p>
                <p v-if="quizdata!=null">{{ans}}</p>
    </div>
</template>

<script>
export default {
    name: 'Laravel8Vue3SanctumSpaBest3Quizcreate',

    data() {
        return {
            quizdata:null,
            datamsg:null,
ans:null,

        };
    },

    mounted() {
        
    },

    methods: {
        async   getquizzesfun(){
    var msgin='getquizzes'
            this.datamsg = msgin+"...";
            this.$store.state.loading = true;


            try{

            await axios.post("/api/teacher/getquizzes" )
            .then((res) => {
                console.log(res.data);
                console.log(res.data.data);
                console.log(res.data.data[0]);
                console.log(res.data.data[0].answers);
      
                this.quizdata=res.data.data
            this.$store.state.loading = false;
this.ans=res.data.data[0].answers;
// list to array --------------------------------------
// var a = "['a', 'b', 'c']";
// a = a.replace(/'/g, '"');
// a = JSON.parse(a);
// list to array --------------------------------------

var a = this.ans;
a = a.replace(/'/g, '"');
this.ans = JSON.parse(a);





// this.ans=JSON.parse(this.ans);
console.log(this.ans);
console.log(this.ans[0]);

            });

            } catch (e) {
            // this.datamsg = msgin+"...error";
            console.log(e);
            // alert(msgin+" ... error");
            this.$store.state.loading = false;

            }
},
    },
};
</script>