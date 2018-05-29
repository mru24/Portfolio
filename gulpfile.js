var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cleancss = require('gulp-cleancss');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var changed = require('gulp-changed');
var htmlReplace = require('gulp-html-replace');
var htmlMin = require('gulp-htmlmin');
var copyassets = require('gulp-copy');
var del = require('del');
var sequence = require('run-sequence');


var config = {
  dist: 'dist/',
  src: 'src/',
  sassin: 'src/sass/**/*.sass',
  sassout: 'src/css/',
  cssin: 'src/css/**/*.css',
  cssout: 'dist/css/',
  jsin: 'src/js/**/*.js',
  jsout: 'dist/js/',
  imgin: 'src/img/**/*.{jpg,jpeg,png,gif}',
  imgout: 'dist/img/',
  htmlin: 'src/*.html',
  htmlout: 'dist/',
  cssoutname: 'style.css',
  jsoutname: 'main.js',
  assetsin: 'src/assets/**/*',
  assetsout: 'dist/assets/'
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
    .pipe(gulp.dest(config.sassout))
    .pipe(browserSync.stream());
});

gulp.task('css', function() {
  return gulp.src(config.cssin)
    .pipe(cleancss())
    .pipe(gulp.dest(config.cssout));
});

gulp.task('js', function() {
  return gulp.src(config.jsin)
    .pipe(uglify())
    .pipe(gulp.dest(config.jsout));
});

gulp.task('img', function() {
  return gulp.src(config.imgin)
    .pipe(changed(config.imgout))
    .pipe(imagemin())
    .pipe(gulp.dest(config.imgout))
});

gulp.task('copyassets', function () {
  return gulp.src(config.assetsin)
    .pipe(gulp.dest(config.assetsout));
});

gulp.task('html', function() {
  return gulp.src(config.htmlin)
    .pipe(htmlReplace({
      'css': 'css/style.css',
      'js': 'js/main.js'
    }))
    .pipe(htmlMin({
      sortAttributes: true,
      sortClassName: true,
      collapseWhitespace: true
    }))
    .pipe(gulp.dest(config.htmlout))
});

gulp.task('clean', function() {
  return del([config.dist])
});

gulp.task('build', function() {
  sequence('clean', ['css', 'js', 'img', 'copyassets', 'html'])
})


gulp.task('default', ['serve']);
