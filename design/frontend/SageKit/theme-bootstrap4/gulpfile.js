var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

var config = {
 src: './web/scss/*.scss',
 dest: './web/css/'
};

var onError = function(err){
 notify.onError({
  title: 'Gulp',
  subtitle: 'Failure!',
  message: 'Error: <%= error.message %>',
  sound: 'Beep'
 })(err);
 
 this.emit('end');
};

gulp.task('styles', function() {

 var stream = gulp.src([config.src])
  .pipe(plumber({errorHandler: onError}))
  .pipe(sass().on('error', sass.logError))
  .pipe(cssnano())
  .pipe(rename({
   suffix: '.min'
  }));
  
  return stream.pipe(gulp.dest('./web/css/'));

});