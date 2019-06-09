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

mix.browserSync({
    proxy: 'localhost:8000',
    files: [
        'resources/sass/app.scss',
        'public/assets/site/css/app.css',   // Generated .css file
        'public/assets/admin/css/app.css',  // Generated .css file
        'public/assets/site/js/app.js',     // Generated .js file
        'public/assets/admin/js/app.js',    // Generated .js file
        'app/**/*.+(html|php)',             // Generic .html and/or .php files [no specific platform]
        'routes/**/*.+(html|php)',          // Generic .html and/or .php files [no specific platform]
        'resources/views/**/*.php',
        'resources/assets/**/*.jpg',
        'resources/assets/**/*.png'
    ],
    stream: true
});