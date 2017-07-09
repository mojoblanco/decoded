let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/magnific-popup.css',
    'public/assets/revolution/css/settings.css',
    'public/assets/css/font-icons.css',
    'public/assets/css/rev-slider.css',
    'public/assets/css/sliders.css',
    'public/assets/css/style.css',
    'public/assets/css/responsive.css',
    'public/assets/css/spacings.css',
    'public/assets/css/animate.min.css',
    'public/assets/css/decoded.css'
], 'public/css/site.css');


mix.scripts([
    'public/assets/js/jquery.min.js',
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/plugins.js',
    'public/assets/revolution/js/jquery.themepunch.tools.min.js',
    'public/assets/revolution/js/jquery.themepunch.revolution.min.js',
    'public/assets/js/rev-slider.js',
    'public/assets/js/scripts.js',
], 'public/js/site.js');

mix.copyDirectory('public/assets/fonts', 'public/fonts');
