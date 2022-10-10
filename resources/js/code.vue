<template>
    <div>

php artisan make:model MarksUser -mc
php artisan make:model MarksSetup -mc
php artisan make:model MarksMark -mc
php artisan migrate
      ------------------------
vue-sweetalert2
npm install -S vue-sweetalert2

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
app.use(VueSweetalert2);
------
this.$swal('Hello Vue world!!!');

-------------------------
https://sweetalert2.github.io/#configuration
-----------------------


const { value: email } = await Swal.fire({
  title: 'Input email address',
  input: 'email',
  inputLabel: 'Your email address',
  inputPlaceholder: 'Enter your email address'
})

if (email) {
  Swal.fire(`Entered email: ${email}`)
}
    </div>
</template>

<script>
export default {
    name: 'Laravel8Vue3SanctumSpaBestCode',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
};
</script>

<style lang="scss" scoped>

</style>