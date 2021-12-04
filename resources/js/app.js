window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
window.EventBus = new Vue

import { createInertiaApp } from '@inertiajs/inertia-vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify)
const vuetify = new Vuetify()

import torque from '@fuseday/torquejs'
Vue.use(torque.plugin())

import Fragment from 'vue-fragment'
Vue.use(Fragment.Plugin)

function toast(toast) {
    toast = { text: 'foo', icon: 'mdi-cards', color: 'info', ...toast}

    window.EventBus.$emit('notify',
        {
            message: {
                text: toast.text,
                icon: toast.icon,
            },
            color: toast.color,
        }
    )
}

Vue.mixin({ methods: { route } })

import PortalVue from 'portal-vue'
Vue.use(PortalVue)


const files = require.context('./components', true, /\.vue|\.js$/i)
files.keys().map(key => window.Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Layout from './Layouts/VuetifyLayout'

createInertiaApp({
    resolve: name => {
        const page = require(`./pages/${name}`).default
        page.layout = page.layout || Layout
        return page
    },
    setup: ({ el, app, props })  => {
        new Vue({
            vuetify,
            render: h => h(app, props),
        }).$mount(el)
    }
})
