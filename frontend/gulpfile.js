'use strict'

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin')
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var runSequence = require('run-sequence');
var multiDest = require('gulp-multi-dest');
var concat = require('gulp-concat-sourcemap');
var sourcemaps = require('gulp-sourcemaps');



gulp.vendor = require('./vendor.json');
var vendor = gulp.vendor;

gulp.app = require('./app.json');
var app = gulp.app;


gulp.task('app', ['sync-dev', 'sass-dev', 'js-dev'], function() {
  gulp.watch(app.source + 'scss/**/**/*.scss', ['sass-dev']);
  gulp.watch(app.source + 'js/**/*.js', ['js-dev']);
});


gulp.task('vendor', [], function() {
  gulp.src(vendor.js)
  .pipe(concat('stencil.vendor.js'))
  .pipe(gulp.dest(app.target + 'js/'))
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest(app.target + 'js'));

  gulp.src(vendor.css)
  .pipe(concat('stencil.vendor.css'))
  .pipe(gulp.dest(app.target + 'css/'));

  
});

gulp.task('sass-dev', [], function() {
  return gulp.src(app.css)
  .pipe(sass())
  .pipe(concat('app.css'))
  .pipe(gulp.dest(app.target + 'css'))
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest(app.target + 'css'));
});


gulp.task('js-dev', [], function() {
  return gulp.src(app.js)
  .pipe(concat('app.js'))
  .pipe(gulp.dest(app.target + 'js'))
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest(app.target + 'js'));
});


gulp.task('sync-dev', [], function() {
   gulp.src(app.source + 'img/**/*')
  .pipe(gulp.dest(app.target + 'img'));
  gulp.src(vendor.fonts)
  .pipe(gulp.dest(app.target + 'fonts/'));
});

gulp.task('default', ['app']); 
