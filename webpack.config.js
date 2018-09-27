var Encore = require('@symfony/webpack-encore');
const { VueLoaderPlugin } = require ('vue-loader');
Encore
    .setOutputPath('public/build/')

    .setPublicPath('/public/build')

    .addEntry('js/app', './assets/js/app.js')

    .addStyleEntry('css/main', './assets/css/main.scss')

    .addStyleEntry('css/bootstrap', './assets/css/bootstrap.css')

    .cleanupOutputBeforeBuild()

    .enableBuildNotifications()

    .addPlugin(new VueLoaderPlugin())

    .enableVueLoader()

    .enableSourceMaps(!Encore.isProduction())

    .enableVersioning(Encore.isProduction())

    .enableSassLoader()
;
module.exports = Encore.getWebpackConfig();
