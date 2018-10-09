var config  = require('./config');
var base    = config.base;
var setting = config.setting;
var path    = require('path');
var webpack = require('webpack');

module.exports = {
	// モード値を production に設定すると最適化された状態で、
	// development に設定するとソースマップ有効でJSファイルが出力される
	mode: "production",

	// メインのJS
	entry: {
		'common': './' + setting.path.js.src + 'common.js',
	},
	// 出力ファイル
	output: {
		publicPath: "/",
		path: path.resolve('www'),
		filename: "[name].js",
	},
	devtool: '#source-map',
	plugins: [
		/* use jQuery as Global */
		new webpack.ProvidePlugin({
			jQuery: "jquery",
			$: "jquery",
			Barba: "barba.js",
			AOS: "aos"
		})
	],
}
