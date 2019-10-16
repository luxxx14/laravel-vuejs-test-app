require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from '../assets/js/views/App';
import Documents from '../assets/js/views/Documents';
import DocumentCreate from '../assets/js/views/DocumentCreate';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'documents',
            component: Documents
        },
        {
            path: '/create',
            name: 'document-create',
            component: DocumentCreate,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

