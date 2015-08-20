var gulp = require('gulp');
var elixir = require('laravel-elixir');

/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

  gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap/less/**")
    .pipe(gulp.dest("resources/assets/less/bootstrap"));

  gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
    .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
    .pipe(gulp.dest("public/assets/fonts"));

  gulp.src("vendor/bower_dl/fontawesome/less/**")
      .pipe(gulp.dest("resources/assets/less/fontawesome"));

  gulp.src("vendor/bower_dl/fontawesome/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));

});

/**
 * Default gulp is to run this elixir stuff
 */
elixir(function(mix) {

  // Combine scripts
  mix.scripts(['js/jquery.js','js/bootstrap.js','js/app.js','js/plugins/style-switcher.js'],'public/assets/js/admin.js','resources/assets');
  
  mix.styles([
        "header-v6.css",
        "banner.css",
        "app.css",
        "slogan.css",
        "index.css",
        "style.css",
        "blocks.css",
        "footer.css"
    ], 'public/assets/css/home.css', 'public/css/home');

  mix.styles([
        "home/header-v6.css",
        "home/footer.css",
        "signIn/signIn.css"
    ], 'public/assets/css/signIn.css', 'public/css');

  // Compile Less
  mix.less('admin.less', 'public/assets/css/admin.css');
});