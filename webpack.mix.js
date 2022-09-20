const mix = require('laravel-mix');

mix.js('src/js/app.js', 'public_html/js')
    .sass('src/css/app.scss', "public_html/css")
    .options({
        postCss: [
            require('tailwindcss/nesting'),
            // require('@tailwindcss/forms'),
            require("tailwindcss"),
            require('autoprefixer'),
        ]
    })
    .browserSync({
        proxy: 'php8.test',
        port: 5500,
        notify: false,
        files: [
            'public_html/**/*',
            'src/**/*'
        ]
    });

// mix.disableNotifications();
