module.exports = function (grunt) {
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
            //Copy jquery
            jquery: {
                files: [
                    {
                        expand: true,
                        cwd: 'node_modules/jquery/dist/',
                        src: ['jquery.js'],
                        dest: 'src/js/lib/'

                    }
                ]
            },
            //Copy bootstrap
            bootstrap: {
                files: [
                    {
                        expand: true,
                        cwd: 'node_modules/bootstrap-sass/assets/javascripts/',
                        src: ['bootstrap.js'],
                        dest: 'src/js/lib/'

                    }, {
                        expand: true,
                        cwd: 'node_modules/bootstrap-sass/assets/stylesheets/',
                        src: ['_bootstrap.scss'],
                        dest: 'src/scss/lib/',
                        rename: function (dest, src) {
                            return dest + src.replace(/\.css$/, ".scss");
                        }
                    }
                ]
            }
        },

        // SASS to CSS
        sass: {
            dist: {
                options: {
                    loadPath: ['node_modules/bootstrap-sass/assets/stylesheets/', 'node_modules/sass-rem/']
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
                map: true,
                processors: [
                    require('autoprefixer')({browsers: ['last 3 versions', 'ios 6', 'ie 9']}), // adds prefixes
                    require('postcss-em-media-query')({}) // media queries px -> em
                ]
            },
            dist: {
                files: {
                    'www/templates/dist/css/style.css': 'www/templates/dist/css/style.css' // source CSS for postCSS

                }
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
        concat: {
            options: {
                separator: "\n\n"
            },
            scripts: {
                src: [
                    'src/js/lib/jquery.js',
                    'src/js/lib/bootstrap.js',
                    'src/js/script.js'
                ],
                dest: 'www/templates/dist/js/script.js'
            }
        },
        // JS minification
        uglify: {
            script: {
                src: 'www/templates/dist/js/scripts.js',
                dest: 'www/templates/dist/js/scripts.min.js'
            }
        },

        // Browser auto sync
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        'www/templates/dist/css/*.css',
                        'www/templates/dist/js/*.js'
                    ],
                },
                options: {
                    watchTask: true,
                    proxy: 'http://skeleton.dev/templates' //Have to be changed by each project name
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

        // Critical CSS
        criticalcss: {
            custom: {
                options: {
                    url: "http://localhost:3000/templates",
                    outputfile: "www/templates/dist/css/critical.min.css",
                    filename: "www/templates/dist/css/style.min.css",
                    width: 1200,
                    height: 900

                }
            }
        }



    });


    // 5) Alias tasky
    // ==============

    grunt.registerTask('css', ['sass', 'postcss', 'cssmin']);
    grunt.registerTask('js', ['concat', 'uglify']);
    grunt.registerTask('duplicate', ['copy']);
    grunt.registerTask('default', ['css', 'js', 'browserSync', 'watch']);

};