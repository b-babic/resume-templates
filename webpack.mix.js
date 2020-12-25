const mix = require('laravel-mix');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix
    .js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
  .version();

if(mix.inProduction()) {
  mix.sourceMaps();
}

