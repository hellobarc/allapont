
window.Vue = require('vue');
import VueRouter from 'vue-router';
import { routes } from './routes';//Carga las rutas de routes.js


Vue.component('admin-menu', require('./components/admin-menu.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-menures', require('./components/admin-menures.vue').default);


//Asesoria
Vue.component('asesoria-informe', require('./components/asesoria-informe.vue').default);






Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.middlewareAuth)) {                
        if (!auth.check()) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            });

            return;
        }
    }

    next();
})



export default {
    router,
};

const app = new Vue({
    el: '#app',
    router,
});
