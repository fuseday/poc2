const path = require('path');
const LiveReloadWebpackPlugin = require('@kooneko/livereload-webpack-plugin');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
    plugins: [
        new LiveReloadWebpackPlugin(),
    ],
};
