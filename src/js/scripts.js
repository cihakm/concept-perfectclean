//jQuery
global.$ = global.jQuery = require('jquery');
//global.Tether = require('tether');

//BOOTSTRAP components
require('./lib/bootstrap/alert');
require('./lib/bootstrap/button');
//require('./lib/bootstrap/carousel');
require('./lib/bootstrap/collapse');
require('./lib/bootstrap/dropdown');
require('./lib/bootstrap/modal');
//require('./lib/bootstrap/tooltip');   // require tether -> uncoment it
//require('./lib/bootstrap/scrollspy');
//require('./lib/bootstrap/tab');
//require('./lib/bootstrap/util');
//require('./lib/bootstrap/popover');

$(document).ready(function(){

    var test = "sdftd";
    console.log(test);

});