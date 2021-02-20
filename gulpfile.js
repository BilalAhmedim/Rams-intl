var
gulp = require('gulp'),
postcss = require('gulp-postcss'),
cssimport = require('postcss-import'),
nested = require('postcss-nested'),
mixin = require('postcss-mixins'),
vars = require('postcss-simple-vars'),
hexrgba = require('postcss-hexrgba'),
watch = require('gulp-watch'),
autoprefixer = require('autoprefixer'),
sync = require('browser-sync').create(),
rename = require('gulp-rename'),
maps = require('gulp-sourcemaps'),
plumber = require('gulp-plumber'),
path = "./"
;
gulp.task('watch', function(){

  sync.init({
    //proxy: "ramsinternational.local",
    proxy: "localhost",
    port: 8080,
    notify: false
  });

  watch(path+'**.php', function(){
    sync.reload();
  });

  watch(path+'/css/**/*.pcss', gulp.series('stream'));

  watch(path+'/js/**/*.js', function(){
    sync.reload();
  });
});

gulp.task('styles', function(){
  return gulp.src(path+'css/style.pcss')
  .pipe(maps.init())
  .pipe(postcss([cssimport, mixin, nested, vars, hexrgba, autoprefixer]))
  .pipe(plumber())
  .pipe(rename(
    {
      extname: ".css"
    }
  ))
  .pipe(maps.write('/'))
  .pipe(gulp.dest(path))
});

gulp.task('stream', gulp.series('styles', function(){
  return gulp.src(path+'style.css')
  .pipe(sync.stream());
}))
