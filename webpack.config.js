// output.pathに絶対パスを指定する必要があるため、pathモジュールを読み込んでおく
const path = require("path");
const webpack = require("webpack");

module.exports = {
	// モードの設定、v4系以降はmodeを指定しないと、webpack実行時に警告が出る
	//productionにするとコードが圧縮される
	mode: "production",
	// エントリーポイントの設定
	entry: "./assets/js/index.js",
	// 出力の設定
	output: {
		// 出力するファイル名
		filename: "bundle.js",
		// 出力先のパス（絶対パスを指定する必要がある）
		path: path.join(__dirname, "assets"),
	},
	// cache: {
	// 	type: "filesystem",
	// 	buildDependencies: {
	// 		config: [__filename],
	// 	},
	// },
	// module: {
	// 	rules: [
	// 		{
	// 			test: /\.css$/i,
	// 			use: [
	// 				{
	// 					loader: "style-loader",
	// 					options: {
	// 						injectType: "styleTag",
	// 					},
	// 				},
	// 				{
	// 					loader: "css-loader",
	// 					options: {
	// 						url: false,
	// 						sourceMap: true,
	// 					},
	// 				},
	// 			],
	// 		},
	// 	],
	// },
	devServer: {
		contentBase: path.join(__dirname, "./"), // webpack-dev-serverの公開フォルダ
		open: true, // サーバー起動時にブラウザを開く
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery",
		}),
	],
};
