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
mix.styles([
    'resources/back/font/iconsmind/style.css',
    'resources/back/font/simple-line-icons/css/simple-line-icons.css',
    'resources/back/css/vendor/bootstrap.min.css',
    'resources/back/css/vendor/bootstrap-float-label.min.css',
    'resources/back/css/main.css',

], 'public/css/login.css');

mix.scripts([
    'resources/back/js/vendor/jquery-3.3.1.min.js',
    'resources/back/js/vendor/bootstrap.bundle.min.js',
    'resources/back/js/dore.script.js',
    'resources/back/js/scripts.js',

], 'public/js/login.js');

mix.copy('resources/back/font', 'public/fonts');
// mix.copy('resources/admin/dist/fonts', 'public/fonts');
// mix.copy('resources/admin/dist/img', 'public/img');
