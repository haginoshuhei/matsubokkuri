//gulp読み込み
var gulp = require("gulp");

//sass関連
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var webpack = require("webpack");
const webpackStream = require("webpack-stream");
const webpackConfig = require("./webpack.config.js");

//ejs関連
var ejs = require("gulp-ejs");

//リネーム
var rename = require("gulp-rename");

//webpack
gulp.task("webpack", () => {
	// webpackStreamの第2引数にwebpackを渡す
	return webpackStream(webpackConfig, webpack).pipe(gulp.dest("./assets"));
});

////////////////////ejsコンパイル////////////////////
gulp.task("ejs", (done) => {
	gulp
		.src(["./ejs/*.ejs", "!" + "./ejs/_*.ejs"])
		.pipe(ejs())
		.pipe(
			rename({
				extname: ".html",
			})
		) //拡張子をhtmlに
		.pipe(gulp.dest("./")); //出力先
	done();
});

////////////////////SASSコンパイル////////////////////
gulp.task("sass", function () {
	return gulp
		.src("./assets/css/*.scss")
		.pipe(
			sass({
				outputStyle: "compressed",
			})
		)
		.pipe(postcss([autoprefixer({})]))
		.pipe(gulp.dest("./assets/css"));
});

////////////////////ブラウザシンク///////////////////
var browserSync = require("browser-sync");

gulp.task("sync", function () {
	browserSync({
		files: ["./assets/bundle.js", "./assets/js/*.js", "./assets/css/*.css", "./ejs/*.ejs", "./*.php", "./*.html"],
		proxy: "localhost/matsubokkuri", //接続したいMAMP/XAMPPディレクトリを記述
	});
});

////////////////////SASS,PHP監視////////////////////
gulp.task("watch", function (done) {
	gulp.watch("./ejs/*.ejs", gulp.task("ejs"));
	gulp.watch("./assets/css/*.scss", gulp.task("sass"));
	gulp.watch("./assets/js/*.js", gulp.task("webpack"));
	done();
});

////////////////////gulpコマンドでSASSコンパイル、ブラウザシンク、監視を実行////////////////////
gulp.task(
	"default",
	gulp.series(gulp.parallel("sass", "sync", "watch", "ejs"), (done) => {
		done();
	})
);