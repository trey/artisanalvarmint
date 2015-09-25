module.exports = {
    options: {
        livereload: true
    },
    sass: {
        options: { livereload: false },
        files: ['sass/**/*.scss'],
        tasks: ['sasslint', 'sass']
    },
    css: {
        files: ['sass/**/*.css'],
        tasks: ['postcss']
    }
};
