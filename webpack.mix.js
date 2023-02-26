const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/**mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

**/

mix

    .options({
        processCssUrls: false
    })

    .copyDirectory('resources/images', 'public/assets/images')

    .styles([
        'resources/css/nicepage.css',
        'resources/css/css_002.css',
    ], 'public/assets/css/vendor.css')

    .css('resources/css/css.css',
        'public/assets/css/style.css')

    .scripts([
        'resources/js/jquery-1.9.1.min.js',
        'resources/js/nicepage.js'
    ], 'public/assets/js/vendor.js')


    .version()