const path = require('path');

const PATHS = {
    app: path.resolve(__dirname,'src/app'),
    build: path.resolve(__dirname,'../html'),
    // assets: path.resolve(__dirname,'assets')
};

var HtmlWebpackPlugin = require('html-webpack-plugin');

var ENV = process.env.npm_lifecycle_event;
var isProd = ENV === 'build';

module.exports = {
    entry: {
        app: PATHS.app + "/index.js"
    },
    output: {
        path: PATHS.build,
        publicPath: isProd ? '/' : 'http://localhost:6868/',
        filename: isProd ? 'js/[name].[hash].js' : 'js/[name].js',
        chunkFilename: isProd ? '[id].[hash].chunk.js' : '[id].chunk.js'
    },
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            'vue': 'vue/dist/vue.min.js'
        }
    },
    devServer: {
        host: '127.0.0.1',
        port: 6868,
    },
    module: {
        loaders: [{
            test: /\.vue$/,
            loader: 'vue-loader'
        }, {
            test: /\.css$/,
            loaders: ['style-loader','css-loader']
        }, {
            test: /\.(jpg|png)$/,
            loader: 'file-loader?name=images/[name].[ext]'
        }, {
            test: /\.(woff|woff2)(\?v=\d+\.\d+\.\d+)?$/,
            loader: 'url-loader?limit=10000&mimetype=application/font-woff'
        }, {
            test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,
            loader: 'url-loader?limit=10000&mimetype=application/octet-stream'
        }, {
            test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,
            loader: 'file-loader'
        }, {
            test: /\.html$/,
            loader: 'raw-loader', exclude: path.resolve(__dirname,'src/public')
        }, {
            test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
            loader: 'url-loader?limit=10000&mimetype=image/svg+xml'
        }],
    },
    plugins: [
      new HtmlWebpackPlugin({
        template: 'underscore-template-loader!./src/public/index.html',
        chunksSortMode: 'dependency'
      }),
    ]
};