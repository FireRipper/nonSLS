const mix = require('laravel-mix')

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
	.js('resources/js/global.js', 'public/js/main.js')
	.sass('resources/sass/app.scss', 'public/css')
	.sass('resources/sass/bootstrap.scss', 'public/css')
	.options({
		processCssUrls: false
	})
	.copyDirectory('resources/images', 'public/images')
	.copyDirectory('resources/fonts', 'public/fonts');
