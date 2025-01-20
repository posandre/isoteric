const distPath = '../'
const srcPath = './'
const hostUrl = 'http://quantumezoterik.loc'

const path = {
    build: {
        css: distPath + 'assets/css/',
        cssBlocks: distPath + 'assets/css/blocks/',
        js: distPath + 'assets/js/',
    },
    src: {
        css: srcPath + 'scss/*.scss',
        cssBlocks: srcPath + 'scss/blocks/*.scss',
        cssTinymce: srcPath + 'scss/tinymce/*.scss',
        js: srcPath + 'js/**/*.js',
    },
    watch: {
        css: srcPath + 'scss/**/*.scss',
        js: srcPath + 'js/**/*.js',
    },
    clean: {
        css: distPath + '/css/',
        js: distPath + '/js/',
    }
}

const {
    src,
    dest,
    series,
    parallel
} = require('gulp')
const gulp = require('gulp')


const browserSync = require('browser-sync')

const fileInclude = require('gulp-file-include')
const del = require('del')
const scss = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const group_media = require('gulp-group-css-media-queries')
const clean_css = require('gulp-clean-css')
const rename = require('gulp-rename')
const uglify = require('gulp-uglify-es').default
const notify = require('gulp-notify')
const plumber = require('gulp-plumber')
const babel = require('gulp-babel')

function browserSyncF() {
    browserSync.init({
        proxy:  hostUrl,
        online: true,
    });
}

function cssBuild(pathSrc,pathBuild) {
    return src(pathSrc)
        .pipe(
            plumber({
                errorHandler: function (err) {
                    notify.onError({
                        title: 'SCSS Error',
                        message: 'Error: <%= error.message %>',
                    })(err)
                    this.emit('end')
                },
            })
        )
        .pipe(scss({ outputStyle: 'expanded' }))
        .pipe(group_media())
        .pipe(
            autoprefixer({
                overrideBrowserslist: ['last 5 versions', 'ie >= 11'],
                cascade: true,
                grid: 'autoplace'
            })
        )
        .pipe(dest(pathBuild))
        .pipe(clean_css())
        .pipe(rename({ extname: '.min.css' }))
        .pipe(dest(pathBuild))
        .pipe(browserSync.stream())
}

function css(cb) {
    cssBuild(path.src.css, path.build.css)
    cssBuild(path.src.cssBlocks, path.build.cssBlocks);

    cb()
}

function js() {
    return src(path.src.js)
        .pipe(
            plumber({
                errorHandler: function (err) {
                    notify.onError({
                        title: 'JS Error',
                        message: 'Error: <%= error.message %>',
                    })(err)
                    this.emit('end')
                },
            })
        )
        .pipe(fileInclude())
        .pipe(plumber())
        .pipe(
            babel({
                // presets: ['@babel/preset-env'],
                 compact: false
            })
        )
        .pipe(dest(path.build.js))
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js' }))
        .pipe(dest(path.build.js))
        .pipe(browserSync.stream())
}

function watchFiles(cb) {
    gulp.watch([path.watch.css], css)
    gulp.watch([path.watch.js], js)

    cb()
}

function clean() {
    return del(
        [
                path.clean.css,
                path.clean.js,
            ],
        {
            force: true
        }
    )
}

let build = series(
    clean,
    parallel(
        js,
        css
    )
)
let watch = series(
    parallel(
        build ,
        watchFiles
    ),

)

exports.default = watch
exports.build = build
exports.clean = clean
exports.js = js
exports.css = css