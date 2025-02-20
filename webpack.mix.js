const mix = require('laravel-mix');
const fs = require('fs');

// directory to check if exists
const dir = './wp-content';

if (fs.existsSync(dir)) {
    var dirRaiz = "./wp-content/themes/s3/assets";
} else {
    var dirRaiz = "./s3/assets";
}

mix.options({
    publicPath: "./"
});

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
        alias: {
            jquery: 'jquery/src/jquery',
        },
    },
});

/**
 * Javascripts
 */
mix.js('resources/js/app.js', dirRaiz + '/js')
    .sourceMaps();

/**
 * Folhas de Estilo
 */
mix.sass('resources/scss/app.scss', dirRaiz + '/css')
    .options({
        processCssUrls: false
    });

/**
 * Arquivos de Imagens
 */
mix.copyDirectory('resources/img', dirRaiz + '/img');

/**
 * Slick Images
 */
 mix.copyDirectory('node_modules/slick-carousel/slick/ajax-loader.gif', dirRaiz + '/css');

/**
 * 
 * Arquivos de fontes
 */
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts/', dirRaiz + '/fonts');
mix.copyDirectory('node_modules/slick-carousel/slick/fonts/', dirRaiz + '/css/fonts');