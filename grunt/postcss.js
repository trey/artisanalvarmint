module.exports = {
    options: {
        map: { inline: true },
        processors: [
            require('autoprefixer')(
                { browsers: ['last 2 versions'] }
            ),
        ]
    },
    target: {
        expand: true,
        cwd: 'sass',
        src: ['*.css'],
        dest: '',
        ext: '.css'
    }
};
