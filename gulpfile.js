var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var jQueryPath = 'node_modules/jquery';
    var bootstrapPath = 'node_modules/bootstrap-sass/assets'; 
    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
        .copy(jQueryPath + '/dist/jquery.min.js', 'public/js');

    mix.scripts([
        'vendor/jquery-bracket/dist/jquery.bracket.min.js',
    ], 'public/js/scripts.js', 'resources/');
    mix.styles([
        'resources/vendor/jquery-bracket/dist/jquery.bracket.min.css',
        'public/css/app.css',
    ], 'public/css/app.css', '.');

});
