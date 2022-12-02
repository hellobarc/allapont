import Home from './components/Home.vue';
import Example from './components/Example.vue';
import Asesoriainforme from './components/asesoria-informe.vue';
import NotFound from './components/404.vue';
import Register from './components/Register.vue';

export const 

routes = [
    { path: '/vue', component: Home, name: 'Home' },
	
	{ path: '/vue/example', component: Example, name: 'Example' },
	
	{ 	path: '/zzz', 
		component: Asesoriainforme, 
		name: 'Asesoriainforme',
	},

	{ path: '*', component: NotFound },

	{ path: '/vue-register', 	component: Register }
];