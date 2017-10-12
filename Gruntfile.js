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
<<<<<<< HEAD
          browser: "google chrome",
=======
<<<<<<< HEAD
          browser: "google chrome",
=======
          browser: "Google Chrome",
>>>>>>> 52ee638e2f490effa367db8c883ff7844d23211c
>>>>>>> e548c08e3fcc52cdc64ce875df6ae7e85cd4b614
          server: {
            baseDir: './',
            index: 'hopeFarm.html'
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