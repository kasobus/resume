const path = require('path');

// webpack.config.js

module.exports = {

    mode: 'development',
    entry: {
        customizer: './src/js/wordpress/customizer.js',
        navigation: './src/js/wordpress/navigation.js',
        skip_link_focus_fix: './src/js/wordpress/skip-link-focus-fix.js',
        main: './src/js/index.js'
    },
    devtool: 'inline-source-map',
    devServer: {
        contentBase: 'dist'
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist')
    }
};