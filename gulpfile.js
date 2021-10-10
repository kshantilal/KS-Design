var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var uglifycss = require('gulp-uglifycss');
var uglifyjs = require('gulp-uglify');
// var clean = require('gulp-clean');
var rename = require('gulp-rename');
var pipeline = require('readable-stream').pipeline;
var del = require('del');


// Move images asset/img to public/img for production
var paths = {
    images: 'assets/img/*'
},
dest = {
    img: 'public/img'
};

gulp.task('img', function(){
    return(gulp.src(paths.images))
    .pipe(gulp.dest(dest.img))
});

// Cleans out the images inside assets/img every time you call gulp
gulp.task('clean:img', async function() {
    return del.sync('./assets/img/*');
})

// Complile scss to css
gulp.task('sass', function () {
    return pipeline(
        gulp.src('./assets/scss/*.scss'),
        sass().on('error', sass.logError),
        gulp.dest('./assets/css')
    );
});

// Grabs the css file from above and minifies it inside public/css
gulp.task('css', function (){
    return pipeline(
        gulp.src('./assets/css/*.css'),
        uglifycss({"uglyComments": true}),
        rename({ extname: '.min.css' }),
        gulp.dest('./public/css')
    );
});


// Compliles JS
gulp.task('js', function () {
    return pipeline(
        gulp.src('./assets/js/*.js'),
        uglifyjs(),
        rename({ extname: '.min.js' }),
        gulp.dest('./public/js')
    );
});

gulp.task('run', gulp.series('sass', 'css', 'js', 'img', 'clean:img'));

gulp.task('watch', function () {
    gulp.watch('./assets/scss/*.scss', gulp.series('sass'));
    gulp.watch('./assets/css/*.css', gulp.series('css'));
    gulp.watch('./assets/js/*.js', gulp.series('js'));
    gulp.watch('./assets/img/*', gulp.series('img'));
});

gulp.task('default', gulp.series('run', 'watch'));
