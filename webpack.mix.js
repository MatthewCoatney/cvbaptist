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
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/


   mix.sass('resources/assets/sass/app.sass', 'public/css')
   .sass('resources/assets/sass/_settings.sass', 'public/css')
   .sass('resources/assets/sass/_custom.sass', 'public/css');

   mix.js('resources/assets/js/jquery.js', 'public/js')
   .js('resources/assets/js/what-input.js', 'public/js')
   .js('resources/assets/js/foundation.min.js', 'public/js')
   .js('resources/assets/js/app.js', 'public/js');




//'node_modules/jquery/dist/jquery.min.js',
//'node_modules/foundation-sites/dist/js/foundation.min.js'
