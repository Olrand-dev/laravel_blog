const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').extract();
mix.js('resources/js/prism.js', 'public/js');
mix.js('resources/js/slick.min.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/vendor.scss', 'public/css');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
