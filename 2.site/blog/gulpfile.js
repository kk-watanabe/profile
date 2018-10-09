var gulp = require('gulp');
var webpack       = require('webpack');
var webpackStream = require('webpack-stream');
var webpackConfig = require('./webpack.config');

var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var runSequence = require('run-sequence');
var del = require('del');
var uglify = require('gulp-uglify-es').default;

var config = require('./config');
var base = config.base;
var setting = config.setting;

// SASS
gulp.task('scss',function(){
  return gulp.src(setting.path.sass.src)
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.sass({outputStyle: 'compressed'}))
    .pipe($.postcss([
      require('autoprefixer')({browsers: setting.autoprefixer.browser}),
      require('css-mqpacker')
    ]))
    .pipe($.csso())
    .pipe(gulp.dest(setting.path.sass.dest))
    .pipe(browserSync.reload({stream: true}));
});

// 画像の圧縮
gulp.task('imagemin', function(){
  if(!setting.imagemin.disabled){
    var imageminOptions = {
      optimizationLevel: setting.imagemin.lebel
    };

    return gulp.src(setting.path.image.src)
      .pipe($.plumber({
        errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
      }))
      .pipe($.changed(setting.path.image.dest))
      .pipe($.imagemin(imageminOptions))
      .pipe(gulp.dest(setting.path.image.dest))
      .pipe(browserSync.reload({stream: true}));
  }else{
    return gulp.src(
        setting.path.image.src
      )
      .pipe($.plumber({
        errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
      }))
      .pipe($.changed(setting.path.image.dest))
      .pipe(gulp.dest(setting.path.image.dest))
      .pipe(browserSync.reload({stream: true}));
  }
});

gulp.task('webpack', function () {
    webpackStream(webpackConfig, webpack)
        .pipe(gulp.dest('./' + setting.path.js.dest))
        .pipe(browserSync.reload({stream: true}));
});


// Build
gulp.task('build', function(){
  return runSequence(
    ['scss'],
    ['imagemin', 'webpack']
  );
});

// Watch
gulp.task('watch', function(){
  browserSync.init(setting.browserSync);

  gulp.watch([setting.path.sass.src], {interval: 500}, ['scss']);
  gulp.watch([setting.path.js.src + '**/*.js'], {interval: 500}, ['webpack']);
  gulp.watch([base.dir+'**/*.html'], {interval: 500}, browserSync.reload);
  gulp.watch([base.dir+'**/*.php'], {interval: 500}, browserSync.reload);
});

gulp.task('default',['watch', 'webpack']);
