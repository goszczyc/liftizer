//Config
var paths = {
    input: './',
  	output: '../',
    reload: '../',
    styles: {
        src: './sass/**/*.{scss,sass}',
        dest: '../stylesheets',
        basename: 'theme',
    },
    scripts: {
        src: './js/**/*.js',
        dest: '../js',
        filename: 'theme.js'
    },
    images: {
        src: './images/**/*',
        dest: '../images'
    },
    assets: {
        src: './assets/**',
        dest: '../assets/',
    },
};


var gulp = require('gulp');
var sass = require('gulp-sass');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var postcss = require('gulp-postcss');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var del = require('del');
var postcssImportUrl = require('postcss-import-url');
var autoprefixer = require('autoprefixer');
var postcssClean = require('postcss-clean');

/* Not all tasks need to use streams, a gulpfile is just another node program
 * and you can use all packages available on npm, but it must return either a
 * Promise, a Stream or take a callback and call it
 */
function clean() {
    // You can use multiple globbing patterns as you would with `gulp.src`,
    // for example if you are using del 2.0 or above, return its promise
    return del([
        '../stylesheets',
        '../js'
    ],{force: true});
}

function assets() {
    return gulp.src(paths.assets.src)
        .pipe(gulp.dest(paths.assets.dest))
}

/*
 * Define our tasks using plain functions
 */
function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass({errLogToConsole: true}))
        .pipe( postcss([ postcssImportUrl(), postcssClean(), autoprefixer({overrideBrowserslist: ['last 6 version']}) ]) )
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
    return gulp.src(paths.scripts.src)
        .pipe(sourcemaps.init())
        .pipe(babel(
          {
            presets: ["@babel/preset-env"]
          }
        ).on('error', function(err) {
          // For gulp-util users u can use a more colorfull variation
          // util.log(util.colors.red('[Compilation Error]'));
          // util.log(err.fileName + ( err.loc ? `( ${err.loc.line}, ${err.loc.column} ): ` : ': '));
          // util.log(util.colors.red('error Babel: ' + err.message + '\n'));
          // util.log(err.codeFrame);

          console.log('[Compilation Error]');
          console.log(err.fileName + ( err.loc ? `( ${err.loc.line}, ${err.loc.column} ): ` : ': '));
          console.log('error Babel: ' + err.message + '\n');
          console.log(err.codeFrame);

          this.emit('end');
        }))
        .pipe(uglify())
        .pipe(concat(paths.scripts.filename))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scripts.dest));
}

function images() {
    return gulp.src(paths.images.src)
        .pipe(imagemin([
                imagemin.gifsicle({interlaced: true}),
                imagemin.jpegtran({progressive: true}),
                imagemin.optipng({optimizationLevel: 5}),
                imagemin.svgo(
                  {
                    plugins: [
                        {removeViewBox: true},
                        {cleanupIDs: true}
                    ]
                  }
                )
              ])
        )
        .pipe(gulp.dest(paths.images.dest));
}


// Watch for changes
var watchSource = function (done) {
	// gulp.watch([paths.scripts.src, paths.styles.src, paths.images.src], gulp.series(exports.default));
  gulp.watch([paths.scripts.src], { ignoreInitial: false }, gulp.series(exports.scripts));
  gulp.watch([paths.styles.src],{ ignoreInitial: false }, gulp.series(exports.styles));
  gulp.watch([paths.images.src],{ ignoreInitial: false }, gulp.series(exports.images));


	done();
};

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.images = images;


/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
exports.build = gulp.series(clean, assets, gulp.parallel(styles, scripts, images));

exports.default = gulp.series(clean, assets, gulp.parallel(styles, scripts, images));

exports.watch = gulp.series(watchSource);

/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', exports.default);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', exports.watch);
