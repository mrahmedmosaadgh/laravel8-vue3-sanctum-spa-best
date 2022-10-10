<template>
    <div >
         home------resources\js\components\startcom\teacher\teacomhome.vue----------------
         <!-- <p>datadb</p>
         <p>{{datadb}}</p>
         
         <p>permissions:{{permissions}}</p>
         <p>roles:{{roles}}</p>
         <p>current_user:{{current_user}}</p> -->
    </div>
</template>

<script>


export default {
    data() {
        return {

            loading: '',
            datamsg: '',
            datadb: '',
            // classnamesarray: [],
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
            // classes: '',
        };
    },
mounted() {
this.user()
    },

   methods: {
async user(){
    // await this.$store.dispatch('getUser')
    await axios.get('/api/user').then((res) => {
                // commit('setUser', res.data);
                this.datadb=res.data
            }).catch((err) => {
                throw err.response
            })
}
   }





}
</script>

<style scoped>

</style>