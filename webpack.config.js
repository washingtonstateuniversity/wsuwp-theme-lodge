const path = require('path');
const autoprefixer = require('autoprefixer');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');

module.exports = env => {
	const DEV = env.NODE_ENV === 'development';

	return {
		context: __dirname,
		entry: {
			scripts: './assets/src/index.js'
		},
		output: {
			path: path.resolve(__dirname, './assets/dist'),
			filename: 'scripts.js'
		},
		mode: DEV ? 'development' : 'production',
		devtool: DEV ? 'inline-source-map' : 'source-map',
		module: {
			rules: [
				{
					test: /.scss$/,
					use: [
						MiniCssExtractPlugin.loader,
						{
							loader: 'css-loader',
							options: {
								sourceMap: true
							}
						},
						{
							loader: 'postcss-loader',
							options: {
								ident: 'postcss',
								sourceMap: true,
								plugins: () => [
									autoprefixer({
										browsers: [
											'>1%',
											'last 4 versions',
											'Firefox ESR',
											'not ie < 9'
										]
									})
								]
							}
						},
						{
							loader: 'sass-loader',
							options: {
								sourceMap: true,
							}
						}
					],
				},
				{
					enforce: 'pre',
					test: /\.js$/,
					exclude: /node_modules/,
					loader: 'eslint-loader',
				},
				{
					test: /\.js$/,
					exclude: /node_modules/,
					loader: 'babel-loader',
				},
			]
		},
		optimization: {
			minimize: !DEV,
			minimizer: [
				new OptimizeCSSAssetsPlugin({
					cssProcessorOptions: {
						map: {
							inline: false,
							annotation: true,
						}
					}
				}),
				new TerserPlugin({
					terserOptions: {
						compress: {
							warnings: false,
						},
						output: {
							comments: false
						}
					},
					sourceMap: true
				})
			]
		},
		plugins: [
			new MiniCssExtractPlugin({
				filename: 'main.css'
			}),
			new LiveReloadPlugin(),
			new StylelintPlugin(),
		]
	}
};
