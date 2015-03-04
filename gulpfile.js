var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/js/jquery.js')
        .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/bootstrap.js')
        .copy('vendor/bower_components/components-webfontloader/webfont.js', 'resources/js/webfont.js')
        .copy('vendor/bower_components/bootstrap/dist/fonts', 'public/fonts')
        .copy('vendor/bower_components/components-font-awesome/fonts', 'public/fonts')
        .copy('vendor/bower_components/components-font-awesome/less', 'resources/assets/less/font-awesome')
        .scripts([
            'jquery.js',
            'bootstrap.js',
            'webfont.js',
            'app.js'
        ]).less('app.less');
});