module.exports = function (grunt) {

  //Project configuration.
  grunt.initConfig({

    //watch
    watch: {
      css: {
        files: ['scss/*.scss', 'scss/**/*.scss', 'scss/**/**/*.scss'],
        tasks: ['sass']
      },
      html: {
        files: ['*.html'],
        task: ['watchTask']
      },
      js: {
        files: ['dest/*.js']
      }
    },
    //sass
    sass: {
      build: {
        options: {
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'scss/',
          src: ['*.scss'],
          dest: 'css/',
          ext: '.css'
        }]
      }
    },

    //browserSync
    browserSync: {
      dev: {
        bsFiles: {
          src: [
            'css/*.css',
            '*.html',
            'js/*.js'
          ]
        },
        options: {
          watchTask: true,
          browser: "Chrome",
          server: {
            baseDir: './',
            index: 'event-inside.html'
          }
        }
      }
    }
  });

  //Load the plugin that provides the "watch sass browserSync" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');


  // Default task(s).
  grunt.registerTask('default', ['browserSync', 'watch']);
};