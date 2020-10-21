var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    cssmin = require('gulp-cssmin'),
    uglify = require("gulp-uglify");

gulp.task('scss', function () {
    return gulp.src(['./scss/fonts.scss', './scss/foundation.scss', './scss/slick.scss', './scss/lightbox.scss', './scss/app.scss', './scss/media.scss'])
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cssmin())
        .pipe(concat('build.css'))
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream())
        .on('error', function (error) {
            console.error('' + error);
        });
});

gulp.task('scripts', function () {
    return gulp.src(['./js/jquery.js', './js/foundation.js', './js/slick.js', './js/lightbox.js', './js/mask.js', './js/map.js', './js/app.js', './js/dev.js'])
        .pipe(uglify())
        .pipe(concat('build.js'))
        .pipe(gulp.dest('./js'));
});

gulp.task('watch', ['scss'], function () {
    browserSync.init({
        server: "./",
        browser: 'chrome'
    });
    gulp.watch("./scss/*.scss", ['scss']);
    gulp.watch("./js/*.js", ['scripts']);
    gulp.watch("./*.html").on('change', browserSync.reload);
});

gulp.task('default', ['watch']);

