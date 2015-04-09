'use strict';

// Load plugins
var gulp = require('gulp');
var browsersync = require('browser-sync');

// error function for plumber
var onError = function (err) {
  gutil.beep();
  console.log(err);
  this.emit('end');
};

// Browser definitions for autoprefixer
var AUTOPREFIXER_BROWSERS = [
  'last 3 versions',
  'ie >= 8',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];

//build datestamp for cache busting
var getStamp = function() {
  var myDate = new Date();

  var myYear = myDate.getFullYear().toString();
  var myMonth = ('0' + (myDate.getMonth() + 1)).slice(-2);
  var myDay = ('0' + myDate.getDate()).slice(-2);
  var mySeconds = myDate.getSeconds().toString();

  var myFullDate = myYear + myMonth + myDay + mySeconds;

  return myFullDate;
};

// BrowserSync proxy
gulp.task('browser-sync', function() {
  browsersync({
    proxy: 'www.webstoemp.dev',
    port: 3000
  });
});

// BrowserSync reload all Browsers
gulp.task('browsersync-reload', function () {
    browsersync.reload();
});



// Watch task
gulp.task('watch', ['browser-sync'], function () {
  gulp.watch('./public_html/assets/scss/**/*', ['css']);
  gulp.watch('./public_html/assets/js/modules/**/*', ['jslint', 'scripts', 'browsersync-reload']);
});

//tasks
gulp.task('default');