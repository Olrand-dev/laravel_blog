/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('site-search', require('./components/SiteSearch.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


$(document).ready(function () {

    $(window).resize(function () {
        let siteContent = $('#site-content');
        let siteTopHeight = $('#drop-down-menu').height();
        let siteBottomHeight = $('#site-bottom').height();

        let siteContentMarginTop = 12;
        let footerOffset = 138;
        
        if (window.innerWidth > 1199) {
            siteContentMarginTop = siteTopHeight;
        } else {
            siteContentMarginTop = 12;
        }

        footerOffset = siteContentMarginTop + siteBottomHeight;
        let siteContentMinHeight = window.innerHeight - footerOffset;

        siteContent.css('margin-top', `${siteContentMarginTop}px`);
        siteContent.css('min-height', `${siteContentMinHeight}px`);
    });

    $(window).scroll(function () {
        
    });
});
