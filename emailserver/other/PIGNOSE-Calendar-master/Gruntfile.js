module.exports = function (grunt) {
    'use strict';
    // Project configuration
    grunt.initConfig({
        // Metadata
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
                '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
                '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
                ' Licensed <%= props.license %> */\n',
        // Task configuration
        uglify: {
            options: {
                banner: '//================================================================================\n' +
                        '// [<%= pkg.name %>]\n' +
                        '// version: <%= pkg.version %>\n' +
                        '// update: <%= grunt.template.today("yyyy.mm.dd") %>\n' +
                        '//================================================================================\n\n'
            },
            dist: {
                files: {
                    'dist/js/pignose.calendar.min.js': [
                        'dist/js/pignose.calendar.js',
                    ],
                    'dist/js/pignose.calendar.full.min.js': [
                        'dist/js/pignose.calendar.full.js'
                    ]
                }
            },
        },
        cssUrlRewrite: {
            dist: {
                src: 'src/css/**.css',
                dest: 'dist/css/pignose.calendar.css',
                options: {
                    skipExternal: true,
                    rewriteUrl: function(url, options, dataURI) {
                        var path = url.replace('src/', '../');
                        return path;
                    }
                }
            }
        },
        cssmin: {
            options: {
                banner: '//================================================================================\n' +
                '// [<%= pkg.name %>]\n' +
                '// version: <%= pkg.version %>\n' +
                '// update: <%= grunt.template.today("yyyy.mm.dd") %>\n' +
                '//================================================================================\n\n'
            },
            dist: {
                files: {
                    'dist/css/pignose.calendar.min.css': [
                        'src/css/pignose.calendar.css'
                    ]
                }
            }
        },
        jshint: {
            files: ['Gruntfile.js', 'src/**.js'],
            options: {
                jshintrc: true
            }
        },
    	copy: {
            main: {
                files: [
                    {
                        expand: true,
                        cwd: 'src',
                        src: 'fonts/*',
                        dest: 'dist/'
                    }
                ]
            }
        },
        csslint: {
            dist: ['src/**.css']
        },
        qunit: {
            files: ['tests/**/*.html']
        },
        requirejs: {
            dist: {
                options: {
                    name: 'plugin',
                    baseUrl: 'src/js/',
                    optimize: 'none',
                    include: [
                        'almond'
                    ],
                    paths: {
                        plugin: 'plugins/jquery.plugin',
                        almond: '../../node_modules/almond/almond',
                        jquery: 'shim/jquery.shim',
                        moment: 'shim/moment.shim'
                    },
                    out: 'dist/js/pignose.calendar.js',
                    wrap: {
                        startFile: 'src/js/wrapper/start.wrapper.js',
                        endFile: 'src/js/wrapper/end.wrapper.js'
                    }
                }
            },
            full: {
                options: {
                    name: 'plugin',
                    baseUrl: 'src/js/',
                    optimize: 'none',
                    include: [
                        'almond',
                    ],
                    paths: {
                        plugin: 'plugins/jquery.plugin',
                        almond: '../../node_modules/almond/almond',
                        jquery: '../../node_modules/jquery/dist/jquery.min',
                        moment: '../../node_modules/moment/min/moment.min'
                    },
                    out: 'dist/js/pignose.calendar.full.js',
                    wrap: {
                        startFile: 'src/js/wrapper/start.wrapper.js',
                        endFile: 'src/js/wrapper/end.wrapper.js'
                    }
                }
            }
        },
        watch: {
            dist: {
                files: [
                    'src/js/**/**.js',
                    'src/css/**/**.css',
                    'Gruntfile.js'
                ],
                tasks: ['default']
            }
        }
    });

    // These plugins provide necessary tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-css-url-rewrite');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task
    grunt.registerTask('default', ['jshint', 'csslint', 'copy', 'cssUrlRewrite', 'cssmin', 'requirejs:dist', 'requirejs:full', 'uglify']);
    grunt.registerTask('test', ['jshint', 'csslint']);
};
