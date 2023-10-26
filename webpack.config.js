require('dotenv').config();

const path = require('path');

const chokidar = require('chokidar');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');

const isDevelopment = process.env.NODE_ENV === 'development';

const pluginOptions = isDevelopment ?
    [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: [path.resolve(__dirname, 'dist')]
        }),
        new SVGSpritemapPlugin('src/svg/**/*.svg', {
            output: {
                svg4everybody: true
            }
        })
    ] :
    [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: [path.resolve(__dirname, 'dist')]
        }),
        new SVGSpritemapPlugin('src/svg/**/*.svg', {
            output: {
                svg4everybody: true
            }
        }),
        new MiniCssExtractPlugin({
            filename: 'css/[name].css'
        }),
        new CopyPlugin({
            patterns: [
                { from: 'src/js/**/*.js', to: path.resolve(__dirname, 'dist/js/[name][ext]') }
            ]
        })
    ];

module.exports = {
    entry: {
        bundle: path.resolve(__dirname, 'src', 'js', 'index.ts'),
        'location-selector': path.resolve(__dirname, 'src', 'js', 'location-selector.ts'),
        'find-us-card': path.resolve(__dirname, 'src', 'js', 'find-us-card.ts'),
        'document-directory': path.resolve(__dirname, 'src', 'js', 'document-directory.ts'),
        'document-picker': path.resolve(__dirname, 'src', 'js', 'document-picker.ts')
    },
    output: {
        filename: 'js/[name].js',
        path: path.resolve(__dirname, 'dist')
    },
    resolve: {
        extensions: ['.tsx', '.ts', '.jsx', '.js']
    },
    target: isDevelopment ? 'web' : 'browserslist',
    plugins: pluginOptions,
    devtool: isDevelopment ? 'eval-source-map' : 'source-map',
    mode: process.env.NODE_ENV,
    devServer: {
        before: (_app, server) => {
            chokidar.watch(['**/*.php']).on('all', function() {
                server.sockWrite(server.sockets, 'content-changed');
            });
        },
        writeToDisk: (filePath) => {
            return /spritemap\.svg$/.test(filePath);
        },
        contentBase: './dist',
        publicPath: '/',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
            'Access-Control-Allow-Headers': 'X-Requested-With, content-type, Authorization'
        },
        hot: true,
        host: process.env.DEV_HOST || 'localhost',
        open: process.env.DEV_OPEN,
        port: 3000,
        watchOptions: {
            poll: true,
            ignored: '/node_modules/'
        }
    },
    module: {
        rules: [{
                test: /\.[jt]sx?$/,
                exclude: /node_modules/,
                use: [{
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    },
                    'ts-loader'
                ]
            },
            {
                test: /\.m?js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.s[ac]ss$/,
                use: [
                    isDevelopment ?
                    'style-loader' :
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../'
                        }
                    },
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            postcssOptions: {
                                plugins: [
                                    'tailwindcss',
                                    ...(!isDevelopment ? ['autoprefixer', 'cssnano'] : [])
                                ]
                            }
                        }
                    },
                    {
                        loader: 'resolve-url-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                            sassOptions: {
                                outputStyle: 'expanded'
                            }
                        }
                    }
                ]
            },
            {
                test: /\.svg$/,
                type: 'asset/source',
                include: [path.resolve(__dirname, 'src/svg/inline')]
            },
            {
                test: /\.svg$/,
                type: 'asset/resource',
                include: [path.resolve(__dirname, 'src/svg')],
                exclude: [path.resolve(__dirname, 'src/svg/inline')],
                generator: {
                    filename: 'svg/[name][ext]'
                }
            },
            {
                test: /\.(jpe?g|png|gif)$/i,
                type: 'asset/resource',
                generator: {
                    filename: 'img/[name][ext]'
                }
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
                generator: {
                    filename: 'fonts/[name][ext]'
                }
            }
        ]
    }
};