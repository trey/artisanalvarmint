module.exports = {
    dist: {
        options: {
            outputStyle: 'expanded'
        },
        files: [{
            expand: true,
            cwd: 'sass',
            src: ['*.scss'],
            dest: 'sass',
            ext: '.css'
        }]
    }
};
