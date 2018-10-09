var gulp          = require('gulp');

var webpack       = require('webpack');
var webpackStream = require('webpack-stream');
var webpackConfig = require('./webpack.config');

var $             = require('gulp-load-plugins')();
var browserSync   = require('browser-sync');
var runSequence   = require('run-sequence');
var del           = require('del');
var uglify        = require('gulp-uglify-es').default;
var path          = require('path');

var config        = require('./config');
var base          = config.base;
var setting       = config.setting;

// SASS
gulp.task('scss',function(){
  return gulp.src(setting.path.sass.src)
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.sourcemaps.init())
    .pipe($.sass({outputStyle: 'compressed'}))
    .pipe($.sourcemaps.write({includeContent: false}))
    .pipe($.sourcemaps.init({loadMaps: true}))
    .pipe($.postcss([
      require('autoprefixer')({browsers: setting.autoprefixer.browser}),
      require('css-mqpacker')
    ]))
    .pipe($.csso())
    .pipe($.sourcemaps.write('./'))
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

// svg
gulp.task('svg', function () {
  return gulp.src(setting.path.svg.src)
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.svgmin(function (file) {
        var prefix = path.basename(file.relative, path.extname(file.relative));
        return {
            plugins: [{
                cleanupIDs: {
                    prefix: prefix + '-',
                    minify: true
                }
            }]
        }
    }))
    .pipe($.svgstore({ inlineSvg: true }))

    .pipe($.cheerio({
        run: function ($) {
            $('[fill]').removeAttr('fill');
            $('[stroke]').removeAttr('stroke');
            $('style').remove();
            $('title').remove();
            $('svg').attr('style','display:none');

            //ロゴの一部オレンジ反映
            $('.cls-2').css('fill', '#ed6d1f');
            $('#logo_w .cls-1').css('fill', '#fff');
            $('.cls-circle-1').css('fill', '#fff');
        },
        parserOptions: { xmlMode: true }
    }))
    .pipe(gulp.dest(setting.path.image.dest));
});

// JavaScript
gulp.task('webpack', function () {
    webpackStream(webpackConfig, webpack)
        .pipe(gulp.dest('./' + setting.path.js.dest))
        .pipe(browserSync.reload({stream: true}));
});

// json
gulp.task('json', function(){
  return gulp.src(setting.path.json.src)
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.changed(setting.path.js.dest))
    .pipe(gulp.dest(setting.path.js.dest))
    .pipe(browserSync.reload({stream: true}));
});

// Include
gulp.task('include', function(){
  return gulp.src(
      setting.path.include.src
    )
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.changed(setting.path.include.dest))
    .pipe(gulp.dest(setting.path.include.dest))
    .pipe(browserSync.reload({stream: true}));
});

// PDF
gulp.task('pdf', function(){
  return gulp.src(
      setting.path.pdf.src
    )
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.changed(setting.path.pdf.dest))
    .pipe(gulp.dest(setting.path.pdf.dest))
    .pipe(browserSync.reload({stream: true}));
});

// MOVIE
gulp.task('movie', function(){
  return gulp.src(
      setting.path.movie.src
    )
    .pipe($.plumber({
      errorHandler: $.notify.onError("Error: <%= error.message %>") //<-
    }))
    .pipe($.changed(setting.path.movie.dest))
    .pipe(gulp.dest(setting.path.movie.dest))
    .pipe(browserSync.reload({stream: true}));
});

// Clean
gulp.task('clean', del.bind(null, base.ast));

// Build
gulp.task('build', function(){
  return runSequence(
    ['clean'],
    ['include', 'scss', 'webpack', 'json','pdf','movie'],
    ['imagemin', 'svg']
  );
});

// Watch
gulp.task('watch', function(){
  browserSync.init(setting.browserSync);

  gulp.watch([setting.path.include.src], {interval: 500}, ['include']);
  gulp.watch([setting.path.pdf.src], {interval: 500}, ['pdf']);
  gulp.watch([setting.path.movie.src], {interval: 500}, ['movie']);
  gulp.watch([setting.path.sass.src], {interval: 500}, ['scss']);
  gulp.watch([setting.path.js.src+'**/*.js'],   {interval: 500}, ['webpack']);
  gulp.watch([setting.path.json.src],   {interval: 500}, ['json']);
  gulp.watch([base.dir+'**/*.html'],  {interval: 500}, browserSync.reload);
  gulp.watch([base.dir+'**/*.php'],   {interval: 500}, browserSync.reload);
});

gulp.task('default',['watch']);
