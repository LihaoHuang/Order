let mix = require('laravel-mix');
let path = require('path');

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
mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve('./'),
            path.resolve('./node_modules')
        ]
    }
});

mix.js([
    'resources/assets/js/app',
    'node_modules/velocity-animate/velocity.min',
    'node_modules/velocity-animate/velocity.ui.min',
    'resources/assets/js/index'
],'public/js/bundle/index.bundle.js');

mix.extract(['vue']);