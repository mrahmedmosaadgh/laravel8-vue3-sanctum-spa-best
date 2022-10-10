<template>
    <div>
        Laravel8Vue3SanctumSpaBest3Test'
<button @click="conf">conf</button> <br>

        <p>
  <button @click="schedule()">schedule</button>
</p>
    </div>
</template>

<script>
import swal from 'sweetalert2'
export default {
    name: 'Laravel8Vue3SanctumSpaBest3Test',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        async   schedule(){
  console.log('1schedule');

             
            await axios.post("/api/teacher/schedule3" )
            .then((res) => {
              console.log(res);
            });

          },

          conf(){
 swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  swal.fire('Saved!', '', 'success')
// this.$store.commit('Toastsuccess')
                } else if (result.isDenied) {
                  swal.fire('Changes are not saved', '', 'info')
                }
              })

     },
    },
};
</script>

<style lang="css" scoped>

</style>