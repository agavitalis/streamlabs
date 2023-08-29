import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";
import DashboardComponent from './components/DashboardComponent.vue';
import RegisterComponent from './components/RegisterComponent.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'register',
            component: RegisterComponent
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: DashboardComponent
        }
    ]
})


const app = createApp({});
app.use(router);
app.mount('#app');

