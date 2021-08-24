require('./bootstrap');

import Vue from 'vue';
import axios from "axios";


function main() {

}

document.addEventListener("DOMContentLoaded", function() {
    main()
});

const components = require.context('./', true, /\.vue$/i)
components.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], components(key).default))

const app = new Vue({
    el: '#app',
})
