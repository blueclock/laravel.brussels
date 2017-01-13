var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'production';
    var port = argv.p || argv.port || 3000;

    mix.sass(["app.scss"], "resources/assets/css/foundation.css");
    mix.copy("resources/assets/css/foundation.css", "build_local/css");
    mix.copy("resources/assets/css/foundation.css", "build_production/css")
        .exec('./vendor/bin/jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/**/*' ]
        });
});
