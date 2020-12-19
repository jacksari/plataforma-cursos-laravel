require('./bootstrap');

require('moment');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import VueCarousel from 'vue-carousel';
import Vuex from 'vuex'
import store from '../js/vuex/store';
import { Plugin } from 'vue-lazy-youtube-video'
import Schedule from 'vue-schedule'

const bodytag = document.querySelector('body');

//if(bodytag.classList.contains('dark')){
//    //bodytag.classList.remove('dark')
//}else{
//    bodytag.classList.add('dark')
//}

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueCarousel);
Vue.use(Vuex);

Vue.use(Schedule)
Vue.use(Plugin)
const app = document.getElementById('app');

let theme = localStorage.getItem('theme');

if(theme == 'claro'){
    const bodytag = document.querySelector('body');
    bodytag.classList.remove('dark')

}else if (theme == 'dark'){
    const bodytag = document.querySelector('body');
    bodytag.classList.add('dark')
}else {
    localStorage.setItem('theme','claro');
}





new Vue({
    store,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
