var gulp = require('gulp');
var watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {
  browserSync.init({
  proxy: 'http://localhost/wordpress/',
  host: '',
  open: 'external'
});


  watch('./*.php', function() {
    browserSync.reload();
  });
  watch('./css/**/*.css', function() {
    gulp.start('cssInject');
  });
  watch('./js/**/*.js', function() {
    gulp.start('scriptsRefresh');
  });
});
gulp.task('cssInject',['styles'], function(){
  return gulp.src('../marketflux/style.css')
  .pipe(browserSync.stream());
});
gulp.task('scriptsRefresh', ['scripts'], function() {
  browserSync.reload();
});
