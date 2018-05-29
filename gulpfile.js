var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cleancss = require('gulp-cleancss');

var config = {
  dist: 'dist/',
  src: 'src/',
  cssin: 'src/css/**/*.css',
  jsin: 'src/js/**/*.js',
  imgin: 'src/img/**/*.{jpg,jpeg,png,gif}',
  htmlin: 'src/*.html',
  sassin: 'src/sass/**/*.sass',
  cssout: 'src/css/',
  jsout: 'dist/js/',
  imgout: 'dist/img/',
  htmlout: 'dist/',
  sassout: 'src/css',
  cssoutname: 'style.css',
  jsoutname: 'main.js'
}

gulp.task('reload', function() {
  browserSync.reload();
});
gulp.task('serve', ['sass'], function() {
  browserSync({
    server: config.src
  })
  gulp.watch(config.htmlin, ['reload']);
  gulp.watch(config.sassin, ['sass']);
});

gulp.task('sass', function() {
  return gulp.src(config.sassin)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 5 versions']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.cssout))
    .pipe(browserSync.stream());
});

gulp.task('css', function() {
  return gulp.src(config.cssin)
    .pipe(cleancss())
    .pipe(gulp.dest(config.cssout));
})

gulp.task('default', ['serve']);
