/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import store from './store/index';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('orders', require('./components/Orders.vue').default);
Vue.component('suppliers', require('./components/Suppliers.vue'));
Vue.component('products', require('./components/Products.vue').default);
Vue.component('postedOrders', require('./components/Posted_orders.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    methods: {
    	newOrder(id, className, orders){
		const newOrder = document.getElementById(id);
		const classname = document.getElementById(className);
		const ordersclass = document.getElementById(orders);
		if (classname.style.display == 'none') {
			classname.style.display = 'block';
			ordersclass.style.display = 'none';
		}else{
			classname.style.display = 'none';
		}
		}, 

		Orders(id, className, orders){
			const newOrder = document.getElementById(id);
			const classname = document.getElementById(className);
			const ordersclass = document.getElementById(orders);

			if (ordersclass.style.display == 'none') {
				ordersclass.style.display = 'block';
				classname.style.display = 'none';
			}else{
				ordersclass.style.display = 'none';
			}
		}
	}
});


	