module.exports = {
    dev: {
        bsFiles: {
            src: 'style.css'
        },
        options: {
            watchTask: true,
            files: [
                'style.css',
                'js/**/*.js',
                '**/*.php'
            ],
            open: false,
            proxy: 'local.wordpress.dev/'
        }
    }
};
