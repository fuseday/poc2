const mix = require('laravel-mix');
mix
    .js('resources/js/app.js', 'public/js')
    .copy([
        'node_modules/vue/dist/vue.js',
        'node_modules/vue/dist/vue.min.js',
    ], 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [])
    .webpackConfig(require('./webpack.config'))
    .sourceMaps()
    .version()
    .webpackConfig({
        externals: {
            vue: ['Vue']
        },
    })
