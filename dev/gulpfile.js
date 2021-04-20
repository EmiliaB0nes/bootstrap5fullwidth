'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");
const uglify = require('gulp-uglify');

sass.compiler = require('node-sass');


gulp.task('sass-css-dev', function () {
  return gulp.src('./scss/bootstrap5fullwidth.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('minify-css', () => {
  return gulp.src('./css/bootstrap5fullwidth.css')
    .pipe(cleanCSS({ compatibility: 'ie10' }))
    .pipe(rename("bootstrap5fullwidth.min.css"))
    .pipe(gulp.dest('./../css/'));
});


gulp.task("prod-js", () => {
  return gulp.src('./js/*.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./../js/'));
});

//gulp.task('prod-watch', function () {
//  gulp.watch('./scss/bootstrap5fullwidth.scss', gulp.series('sass-css-dev', 'minify-css', 'prod-sidebar-js'));
//});

gulp.task('prod-dep', gulp.series('minify-css-prod', 'prod-js'));

gulp.task('minify-css-prod', () => {
  return gulp.src('./css/bootstrap5fullwidth.css')
    .pipe(cleanCSS({ compatibility: 'ie10' }))
    .pipe(rename("bootstrap5fullwidth.min.css"))
    .pipe(gulp.dest('./../css/'));
});

gulp.task('css-prod', gulp.series('sass-css-dev', 'minify-css-prod'));