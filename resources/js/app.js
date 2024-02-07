import './bootstrap';
import { createApp } from "vue";
import router from './router/routes';
import App from './App.vue'
const app = createApp(App);


import {Button,HasError} from 'vform/src/components/bootstrap5'
app.component(Button.name, Button)
app.component(HasError.name, HasError)

import 'vue3-toastify/dist/index.css';

// Import user class
import User from './Helpers/User';
app.use(User);  
app.use(router);
app.mount('#app')