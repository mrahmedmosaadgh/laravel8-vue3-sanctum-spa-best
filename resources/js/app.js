require('./bootstrap');



import { createApp }  from 'vue';
import App from './components/App.vue'
import router from './router';
import store from './store';
import VueExcelXlsx from "vue-excel-xlsx";

axios.defaults.withCredentials = true;

store.dispatch('getUser').then(()=>{
    createApp(App)
        .use(router)
        .use(store)
        .use(VueExcelXlsx) 
        .mount("#app");
})

