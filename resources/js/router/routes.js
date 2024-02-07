import { createRouter, createWebHistory } from 'vue-router';

import login from './../components/auth/login.vue';
import register from './../components/auth/register.vue';
import forget_password from './../components/auth/forget_password.vue';

const routes = [
    {path:'/',name:'login',component:login},
    {path:'/register',name:'register',component:register},
    {path:'/forget-password',name:'forget_password',component:forget_password},
]

const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router;