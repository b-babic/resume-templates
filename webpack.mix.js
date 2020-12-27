const mix = require('laravel-mix');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix
    .js('source/_assets/js/main.js', 'js')
    .options({
        processCssUrls: false,
    })
    .version();

if(mix.inProduction()) {
  mix.sourceMaps();
}

