let mix = require('laravel-mix'),
    build = require('./cleaver.build.js'),
    command = require('node-cmd');

require('mix-tailwindcss');

mix.disableNotifications();
mix.webpackConfig({
    plugins: [
        build.cleaver
    ],
    devServer: {
        contentBase: path.join(__dirname, 'dist')
    }
});

mix.setPublicPath('./')
   .js([
       'resources/assets/js/modernizr-3.6.0.min.js',
       'resources/assets/js/jquery.min.js',
       'resources/assets/js/plugins.js',
       'resources/assets/js/main.js'
   ], 'dist/assets/js')
   .css([
       'resources/assets/sass/bootstrap.min.css',
       'resources/assets/sass/normalize.css',
       'resources/assets/sass/main.css',
   ], 'dist/assets/css')
   .options({
       processCssUrls: false
   })
   .tailwind('./tailwind.config.js')
   .version();

mix.browserSync({
    files: [
        "dist/**/*",
        {
            match: ["resources/**/*"],
            fn: function(event, file) {
                command.get('php cleaver build', (error, stdout, stderr) => {
                    console.log(error ? stderr : stdout);
                });
            }
        }
    ],
    proxy: 'localhost:8080'
});

mix.copy('resources/images/callcenter.jpg', './dist/assets/index_files/callcenter.jpg')
    .copy('resources/images/header-logos-desktop.png', './dist/assets/index_files/header-logos-desktop.png')
    .copy('resources/images/header-logos-mobile.png', './dist/assets/index_files/header-logos-mobile.png')
    .copy('resources/images/load.gif', './dist/assets/index_files/load.gif')
    .copy('resources/images/photo-1.jpg', './dist/assets/index_files/photo-1.jpg')
    .copy('resources/images/photo-2.png', './dist/assets/index_files/photo-2.png')
    .copy('resources/images/photo-3.png', './dist/assets/index_files/photo-3.png')
    .copy('resources/images/social-media-logos-mobile.png', './dist/assets/index_files/social-media-logos-mobile.png')
    .copy('resources/images/regulations.jpg', './dist/assets/index_files/regulations.jpg')
    .copy('resources/assets/sass/bootstrap.min.css', './dist/assets/index_files/bootstrap.min.css')
    .copy('resources/assets/sass/normalize.css', './dist/assets/index_files/normalize.css')
    .copy('resources/assets/sass/main.css', './dist/assets/index_files/main.css')
    .copy('resources/assets/js/modernizr-3.6.0.min.js', './dist/assets/index_files/modernizr-3.6.0.min.js')
    .copy('resources/assets/js/jquery.min.js', './dist/assets/index_files/jquery.min.js')
    .copy('resources/assets/js/plugins.js', './dist/assets/index_files/plugins.js')
    .copy('resources/assets/js/main.js', './dist/assets/index_files/main.js');

