module.exports = function(grunt) {
    "use strict";

    // Task time check
    require('time-grunt')(grunt);

    // Faster loading of grunt and faster runnig tasks
    require('jit-grunt')(grunt);


    // Task settings
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // Copying files (usualy jquery plugins)
        copy: {
            //Copy bootstrap
            bootstrap: {
                files: [
                    {
                        expand: true,
                        cwd: 'node_modules/bootstrap-sass/assets/javascripts/',
                        src: ['bootstrap.js'],
                        dest: 'src/js/lib/'

                    },   {
                        expand: true,
                        cwd: 'node_modules/bootstrap-sass/assets/stylesheets/',
                        src: ['_bootstrap.scss'],
                        dest: 'src/scss/lib/',
                        rename: function(dest, src) {
                            return dest + src.replace(/\.css$/, ".scss");
                        }
                    }
                ]
            }
        },

        // SASS to CSS
        sass: {
            dist: {
                options:{
                    loadPath: 'node_modules/bootstrap-sass/assets/stylesheets/'
                },
                files: {
                    'www/templates/dist/css/style.css': 'src/scss/style.scss',
                    'www/templates/dist/css/style-index.css': 'src/scss/style-index.scss'
                }
            }

        },

        // PostCSS
        postcss: {
            options: {
                processors: [
                    require('pixrem')({rootValue: 16}), // rem -> px fallback
                    require('autoprefixer')({browsers: ['last 3 versions', 'ios 6', 'ie 7', 'ie 8', 'ie 9']}), // adds prefixes
                    require('postcss-em-media-query')({ }) // media queries px -> em
                ]
            },
            dist: {
                src: 'www/templates/dist/css/style.css' // source CSS for postCSS
            }
        },


        // CSSmin - CSS minification
        cssmin: {
            default: {
                files: {
                    'www/templates/dist/css/style.min.css': 'www/templates/dist/css/style.css'
                }
            }
        },


        // All js to one
        browserify : {
            main : {
                files : { 'www/templates/dist/js/script.js' : ['src/js/script.js', "src/js/lib/bootstrap.js"] }
            },
            options: {
                transform: ['debowerify'],
                debug: true
            }
        },

        // JS minification
        uglify: {
            script: {
                src: 'www/templates/dist/js/script.js',
                dest: 'www/templates/dist/js/script.min.js'
            }
        },

        // Browser auto sync
        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'www/templates/dist/css/*.css'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: 'http://skeleton.dev/templates'
                }
            }
        },

        // watch all files for changes and start tasks
        watch: {
            sass: {
                files: 'src/scss/**/*.scss',
                tasks: ['css']
            },
            js: {
                files: 'src/js/**/*.js',
                tasks: ['js']
            }
        },

    });


    // 5) Alias tasky
    // ==============

    grunt.registerTask('css', ['sass', 'postcss', 'cssmin']);
    grunt.registerTask('js', ['browserify', 'uglify']);
    grunt.registerTask('default', ['copy', 'css', 'js', 'browserSync', 'watch']);

};