require('./bootstrap');

import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import Default from './Layouts/Default.vue'

Vue.use(plugin)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => import(`./Pages/${name}`)
        .then(({ default: page }) => {
            if (page.layout === undefined) {
            page.layout = Default
            }
            return page
        }),
    },
  }),
}).$mount(el);
