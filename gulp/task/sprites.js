var gulp = require('gulp');
svgSprite = require('gulp-svg-sprite'),
rename = require('gulp-rename');
del = require('del');

var config = {
  mode: {
    css: {
      sprite: 'svg/sprite.svg',
      render: {
        css: {
          template: '../marketflux/gulp/templates/sprite.css'
        }
      }
    }
  }
}
gulp.task('beginClean', function() {
   return del(['../marketflux/images/sprite/css/*.css', '../marketflux/images/sprite'])
});

gulp.task('createSprite', ['beginClean'], function() {
  return gulp.src('../marketflux/images/icon/**/*.svg')
    .pipe(svgSprite(config))
    .pipe(gulp.dest('../marketflux/images/sprite'));
});

gulp.task('copySpriteCSS', ['createSprite'], function() {
  return gulp.src('../marketflux/images/sprite/css/*.css')
    .pipe(rename('_sprite.css'))
    .pipe(gulp.dest('../marketflux/css/modules'));
});

gulp.task('icons', ['beginClean', 'createSprite', 'copySpriteCSS']);
