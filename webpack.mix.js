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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy("resources/js/main.js", "public/js/main.js");
mix.copy("resources/js/modernizr.js", "public/js/modernizr.js");
mix.copy("resources/js/plugins.js", "public/js/plugins.js");
mix.copy("resources/js/jquery-3.2.1.min.js", "public/js/jquery-3.2.1.min.js");



mix.copy("resources/js/yonetim/app.js", "public/js/yonetim/app.js");
mix.copy("resources/js/yonetim/app.js.map", "public/js/yonetim/app.js.map");
mix.copy("resources/js/yonetim/app.js.LICENSE.txt", "public/js/yonetim/app.js.LICENSE.txt");

