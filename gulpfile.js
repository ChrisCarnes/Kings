'use strict';

const gulp = require("gulp");
const sass = require("gulp-sass");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const prefix = require("gulp-autoprefixer");

gulp

    // Flat, one-off css files.
    .task('css', () => {
        return gulp.src('_source/css/**/*.css')
                   .pipe(gulp.dest('public/css'))
    })

    // Compress `.scss` files at root level of /scss/
    .task('sass', () => {
        return gulp.src('_source/sass/*.scss')
            .pipe(sass({
                includePaths: ['node_modules'],
                outputStyle: 'compressed'
            }).on('error', sass.logError))
            .pipe(prefix({
                browsers: ['> 5% in US'], // Read more at: https://github.com/ai/browserslist#queries
                cascade: false
            }))
            .pipe(rename({extname: ".min.css"}))
            .pipe(gulp.dest('./public/css/'));
    })

    // Run babel and compress output
    .task('js', () => {
        return gulp.src('_source/js/**/*.js')
            .pipe(babel({
                presets: ['es2015']
            }))
            .pipe(uglify({
                preserveComments: 'license'
            }))
            .pipe(rename({extname: ".min.js"}))
            .pipe(gulp.dest('./public/js/'));
    })

    // Listens for changes on `.js` files
    .task('watch', () => {
        gulp.watch('_source/sass/**/*.scss', ['sass']);
        gulp.watch('_source/css/**/*.css', ['css']);
        gulp.watch('_source/js/**/*.js', ['js']);
    })

    .task('run', ['sass', 'js', 'css'])

    // Default
    .task('default', ['sass', 'js', 'css', 'watch']);