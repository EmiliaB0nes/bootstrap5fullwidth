'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");
const uglify = require('gulp-uglify');

sass.compiler = require('node-sass');


gulp.task('sass-css-dev', function () {
  return gulp.src('./scss/custom.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('minify-css', () => {
  return gulp.src('./css/custom.css')
    .pipe(cleanCSS({ compatibility: 'ie10' }))
    .pipe(rename("custom.min.css"))
    .pipe(gulp.dest('./prod/css/'));
});


gulp.task("prod-sidebar-js", () => {
  return gulp.src('./js/*.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./prod/js'));
});


gulp.task('prod-watch', function () {
  gulp.watch('./scss/custom.scss', gulp.series('sass-css-dev', 'minify-css', 'prod-sidebar-js'));
});



gulp.task('prod-dep', gulp.series('sass-css-dev', 'minify-css', 'prod-sidebar-js'));

gulp.task('minify-css-prod', () => {
  return gulp.src('./css/custom.css')
    .pipe(cleanCSS({ compatibility: 'ie10' }))
    .pipe(rename("custom.min.css"))
    .pipe(gulp.dest('./../css/'));
});

gulp.task('css-prod', gulp.series('sass-css-dev', 'minify-css-prod'));