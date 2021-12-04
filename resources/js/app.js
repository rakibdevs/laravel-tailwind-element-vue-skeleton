require('./bootstrap');
import { createApp } from "vue";

import Main from './mixins/main';


import router from './router'
import store from './store';

import queryString from 'query-string';
import Toaster from "@meforma/vue-toaster";
import CKEditor from '@ckeditor/ckeditor5-vue';

import ElementPlus from 'element-plus';
import 'element-plus/lib/theme-chalk/index.css';

const app = createApp({});

app.component('login', require('./components/Auth/Login.vue').default);
app.component('header-component', require('./components/Common/Header.vue').default);
app.component('footer-component', require('./components/Common/Footer.vue').default);

app.component('loading-table', require('./components/Common/LoadingTable.vue').default);

app.component('admin-header', require('./components/Admin/Include/AdminHeader.vue').default);
app.component('admin-sidebar', require('./components/Admin/Include/AdminSidebar.vue').default);
app.component('dashboard', require('./components/Admin/Dashboard/Dashboard.vue').default);

app.component('rdata-table', require('./components/Common/RdataTable.vue').default);

app.mixin(Main)
   .use(router)
   .use(store)
   .use(Toaster, {
      position: "top-right",
   })
   .use(queryString)
   .use(ElementPlus)
   .use(CKEditor)
   .mount("#app");


