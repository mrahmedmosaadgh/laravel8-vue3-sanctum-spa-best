require('./bootstrap');



import { createApp }  from 'vue';
import App from './components/App.vue'
import router from './router';
import store from './store';
import VueExcelXlsx from "vue-excel-xlsx";
import Toast from "vue-toastification";
import draggable from "vuedraggable";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
// import flatpickr from "flatpickr";

import moshaToast from 'mosha-vue-toastify'
import 'mosha-vue-toastify/dist/style.css'

import VueCookies from 'vue3-cookies'
import AudioVisual from 'vue-audio-visual'
// import { VueReCaptcha } from 'vue-recaptcha-v3'
// import  MathJax from 'vuemathjax'


// MathJax = {
//   loader: {load: ['math/input/asciimath', 'math/output/chtml']}
// }




 
// import YyMathjax from 'mathjax3-vue'
// const config={
//     tex: {
//         inlineMath: [['$', '$']],
//         processEscapes: true
//     }
// }
// import   library   from '@fortawesome/fontawesome-svg-core'

// import { faHatWizard } from '@fortawesome/free-solid-svg-icons'

// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// library.add(faHatWizard)

// import { Datepicker, Timepicker, DatetimePicker, DateRangePicker } from '@livelybone/vue-datepicker';
// import '@livelybone/vue-datepicker/lib/css/index.css'
// // Global register
// Vue.component('datepicker', Datepicker);
// Vue.component('timepicker', Timepicker);
// Vue.component('datetime-picker', DatetimePicker);
// Vue.component('date-range-picker', DateRangePicker);
// // Local register
// new Vue({
//   components:{ Datepicker, Timepicker, DatetimePicker, DateRangePicker }
// })

// import fontawesome from "@fortawesome/fontawesome";
// import brands from "@fortawesome/fontawesome-free-brands";
// // import 1 icon if you just need this one. Otherwise you can import the whole module
// import faSpinner from "@fortawesome/fontawesome-free-solid/faSpinner"; 
// import FontAwesomeIcon from "@fortawesome/vue-fontawesome";

// fontawesome.library.add(brands, faSpinner);
// or .add(brands, solid) if you need the whole solid style icons library/module
/* import the fontawesome core */
// import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
// import { faUserSecret } from '@fortawesome/free-solid-svg-icons'

// import { createPinia } from 'pinia';
/* add font awesome icon component */
// Vue.component('font-awesome-icon', FontAwesomeIcon)


// import { useAuthStore } from '@/stores/AuthStore'
// app.use(createPinia())
// import '../css/New folder/style.css';
// import './assets/style.css';
axios.defaults.withCredentials = true;
// library.add(faUserSecret)

store.dispatch('getUser').then(()=>{
    createApp(App)
        .use(router)
        .use(store)
        .use(VueExcelXlsx) 
        .use(draggable)
        .use(VueSweetalert2)
        .use(moshaToast)
        .use(VueCookies)
        .use(AudioVisual)
        // .use(VueReCaptcha, { siteKey: '6Ldz5xwiAAAAAK4guw_OPmnZgK7JFfZQXQiU7bNy' })
        // .use(YyMathjax,config)
        // .use(FontAwesomeIcon)
        // .use(library)
         
      //   .use(VueCookies, {
      //     expireTimes: "30d",
      //     path: "/",
      //     domain: "",
      //     secure: true,
      //     sameSite: "None"
      // });

        .use(Toast,{
            // transition: "my-custom-fade", // .use(createPinia())

            transition: "fade",
            maxToasts: 20,
            newestOnTop: true
          })
        .mount("#app");
})

