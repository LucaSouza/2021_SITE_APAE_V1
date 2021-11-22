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
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/media-300.css', 'public/css/app.css')
    .css('resources/css/media-576.css', 'public/css/app.css')
    .css('resources/css/media-768.css', 'public/css/app.css')
    .css('resources/css/media-992.css', 'public/css/app.css')
    .css('resources/css/media-1200.css', 'public/css/app.css')
    .css('resources/css/media-1500.css', 'public/css/app.css')
    .css('resources/css/media-1900.css', 'public/css/app.css')
    .sourceMaps();
    