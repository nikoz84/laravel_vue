import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/pages/Home.vue';
import About from './components/pages/About.vue';
import Users from './components/pages/Users.vue';
import User from './components/forms/User.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/users',
            name: 'users',
            component: Users,
            children: [{
                path: 'id/:id',
                name: 'editUser',
                component: User
            }]
        }
    ]
});

export default router;
