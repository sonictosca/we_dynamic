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
        .copy('vendor/bower_components/jquery-validation/dist/jquery.validate.js', 'resources/js/jquery.validate.js')
        .copy('vendor/bower_components/jquery-validation/dist/additional-methods.js', 'resources/js/additional-methods.js')
        .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/bootstrap.js')
        .copy('vendor/bower_components/masonry/dist/masonry.pkgd.js', 'resources/js/masonry.pkgd.js')
        .copy('vendor/bower_components/components-webfontloader/webfont.js', 'resources/js/webfont.js')
        .copy('vendor/bower_components/bootstrap/dist/fonts', 'public/fonts')
        .copy('vendor/bower_components/components-font-awesome/fonts', 'public/fonts')
        .copy('vendor/bower_components/components-font-awesome/less', 'resources/assets/less/font-awesome')
        .scripts([
            'jquery.js',
            'jquery.validate.js',
            'additional-methods.js',
            'bootstrap.js',
            'webfont.js',
            'masonry.pkgd.js',
            'app.js'
        ]).less('app.less');
});
