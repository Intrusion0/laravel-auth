require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

document.addEventListener("DOMContentLoaded", function() {
    
    const app = new Vue({
        el: '#app',
    });  
});