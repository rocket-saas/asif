"use strict";

const gulp            = require('gulp');
const sass            = require('gulp-sass');
const concat          = require('gulp-concat');
const prefix          = require('gulp-autoprefixer');
const cssnano         = require('gulp-cssnano');
const rename          = require('gulp-rename');
const runSequence = require('run-sequence');
const webpack         = require('webpack');
const webpackStream   = require('webpack-stream');
const babel           = require('gulp-babel');

function css() {
  return gulp
    .src("sass/main.sass")
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano())
    .pipe(concat('main.css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(prefix('last 2 versions'))
    .pipe(gulp.dest("dist"))
};



function compileJs() {
  return gulp.src('js/main.js')
    .pipe(webpackStream({
      output: {
        filename: "main.min.js",
      },
      module: {
        rules: [
          {
            test: /\.(js|jsx)$/,
            exclude: /(node_modules)/,
            loader: "babel-loader",
            query: {
              presets: ["@babel/preset-env"],
            },
          },
        ],
      },
    }), webpack)
    .pipe(gulp.dest('dist'));
  
}

gulp.task('vendorjs', function(){
  return gulp.src('js/vendors/*.js')
        .pipe(concat('vendors.min.js'))
        .pipe(gulp.dest('dist'));
});

function watchFiles() {
  gulp.watch('sass/**/*.sass', css);
  gulp.watch('js/*.js', compileJs);
}


const build = gulp.series(css, watchFiles);
const watch = gulp.parallel(watchFiles);

// export tasks
exports.css = css;
exports.compileJs = compileJs;
exports.watch = watchFiles;
exports.build = build;
exports.default = build;
