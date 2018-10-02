var Encore = require('@symfony/webpack-encore');
const { VueLoaderPlugin } = require ('vue-loader');
Encore
    .setOutputPath('public/build/')

    .setPublicPath('/public/build')

    .addEntry('js/app', './assets/js/app.js')

    .addStyleEntry('css/main', './assets/scss/main.scss')

    .cleanupOutputBeforeBuild()

    .enableBuildNotifications()

    .addPlugin(new VueLoaderPlugin())

    .enableVueLoader()

    .enableSourceMaps(!Encore.isProduction())

    .enableVersioning(Encore.isProduction())

    .enableSassLoader()
;
module.exports = Encore.getWebpackConfig();
