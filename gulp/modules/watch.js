var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync');


gulp.task('watch', function() {
    browserSync.init({
        server: {
            baseDir: 'app'
        },

        notify: false
    });

    watch('./app/*.html', function() {
        browserSync.reload();
    });

    watch('./app/assets/sass/**/*.scss', function() {
        gulp.start('cssInject');
    })
        //wordpress
    watch('./wp/*.php',function(){
        gulp.start('copyPHP');
    });
    watch('./app/temp/styles/styles.css',function(){
        gulp.start('copyCSS');
    });
    watch('./app/temp/scripts/App.js',function(){
        gulp.start('copyJS');
    });
    });


gulp.task('cssInject', ['styles'], function() {
    return gulp.src('./app/temp/styles/styles.css')
        .pipe(browserSync.stream());
})