import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

import bootstrap from 'bootstrap/dist/js/bootstrap';
window.bootstrap = bootstrap;

import axios from 'axios';
window.axios = axios;

const app = createApp(App)

app.use(router)

app.mount('#app')
