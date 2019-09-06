const autoprefixer = require('autoprefixer');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
	context: __dirname,
	entry: {
		scripts: './assets/src/index.js'
	},
	output: {
		path: path.resolve(__dirname, './assets/dist'),
		filename: 'bundle.[name].js'
	},
	mode: 'development',
	devtool: 'source-map',
	module: {
		rules: [
			{
				test: /.scss$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: "css-loader",
					},
					{
						loader: "postcss-loader",
						options: {
							ident: "postcss",
							plugins: () => [
								autoprefixer({
									browsers: [
										">1%",
										"last 4 versions",
										"Firefox ESR",
										"not ie < 9"
									]
								})
							]
						}
					},
					"sass-loader"
				],
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: 'bundle.css'
		}),
	]
};

// module.exports = {
// 	context: __dirname,
// 	entry: './src/index.js',
// 	output: {
// 		path: path.resolve(__dirname, 'public'),
// 		filename: 'bundle.js'
// 	},
// 	mode: 'development',
// 	devtool: 'cheap-eval-source-map',
// 	module: {
// 		rules: [
// 			{
// 				enforce: 'pre',
// 				exclude: /node_modules/,
// 				test: /\.jsx$/,
// 				loader: 'eslint-loader'
// 			},
// 			{
// 				test: /\.jsx?$/,
// 				loader: 'babel-loader'
// 			}
// 		]
// 	}
// };
