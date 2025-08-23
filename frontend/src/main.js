import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import './main.css'

import axios from 'axios'
axios.defaults.baseURL = 'http://localhost:8000';
window.axios = axios;

const app = createApp(App)

app.use(router)

app.mount('#app')
