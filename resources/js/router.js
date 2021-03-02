import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/pages/Home.vue';
import About from './components/pages/About.vue';
import Users from './components/pages/Users.vue';
import formUser from './components/forms/formUser.vue';
import ShowUser from './components/pages/ShowUser.vue';
import ListUser from './components/pages/ListUsers.vue';


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
            component: Users,
            children: [
                {
                    path: '/',
                    name: 'listUsers',
                    component: ListUser
                },
                {
                    path: 'create',
                    name: 'createUser',
                    component: formUser
                },
                {
                path: 'edit/:id',
                name: 'editUser',
                component: formUser
                },
                {
                    path: 'show/:id',
                    name: 'showUser',
                    component: ShowUser
                }
            ]

        }
    ]
});

export default router;
