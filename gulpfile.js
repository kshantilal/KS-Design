var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var uglifycss = require('gulp-uglifycss');
var uglifyjs = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;


// Complile scss to css
gulp.task('sass', function () {
    return gulp.src('./assets/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
});

// Grabs the css file from above and minifies it inside public/css
gulp.task('css', function () {
    return gulp.src('./assets/css/*.css')
        .pipe(uglifycss({
            "uglyComments": true
        }))
        .pipe(gulp.dest('./public/css'));
});

// Compliles JS
gulp.task('js', function () {
    return pipeline(
        gulp.src('./assets/js/*.js'),
        uglifyjs(),
        gulp.dest('./public/js')
    );
});

gulp.task('run', gulp.series('sass', 'css', 'js'));

gulp.task('watch', function () {
    gulp.watch('./assets/scss/*.scss', gulp.series('sass'));
    gulp.watch('./assets/css/*.css', gulp.series('css'));
    gulp.watch('./assets/js/*.js', gulp.series('js'));
});

gulp.task('default', gulp.series('run', 'watch'));
