const { src, dest, watch, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const esbuild = require("gulp-esbuild");
const browserSync = require("browser-sync").create();

// Sassのコンパイルタスク
function cssSass() {
  return src("_dev/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(dest("src/asset/css"))
    .pipe(browserSync.stream());
}

// JSのバンドルタスク
function jsBundle() {
  return src("_dev/js/script.js")
    .pipe(
      esbuild({
        outfile: "script.js",
        bundle: true,
        format: "iife",
      })
    )
    .pipe(dest("src/asset/js"))
    .pipe(browserSync.stream());
}

// ブラウザシンクの初期化タスク
function browserSyncTask(done) {
  browserSync.init({
    server: {
      baseDir: "src",
    },
    notify: false,
    open: true,
    reloadOnRestart: true,
    ghostMode: false,
  });
  done();
}

// ウォッチタスクの設定
function watchTask() {
  // SCSSファイルの監視
  watch("_dev/scss/**/*.scss", cssSass);

  // HTMLファイルの監視
  watch("src/**/*.html").on("change", function (path) {
    browserSync.reload(path);
  });

  // JSファイルの監視
  watch("_dev/js/**/*.js", jsBundle);
}

// デフォルトタスク
exports.default = parallel(cssSass, jsBundle, browserSyncTask, watchTask);
