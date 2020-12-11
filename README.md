Static website boilerplate using tailwindcss and alpine.
Jigsaw static site generator is used for routing and templating.

## Documentation reference pages
[jigsaw](https://jigsaw.tighten.co/docs/collections/)  
[tailwind](https://tailwindcss.com/docs)  
[tailwind play](https://play.tailwindcss.com)  
[theme reference](https://tailwindcss.com/docs/theme#configuration-reference)  
[default theme](https://github.com/tailwindlabs/tailwindcss/blob/master/stubs/defaultConfig.stub.js#L7)  
[icons](https://heroicons.com)  
[patterns](https://www.heropatterns.com)  
[alpine](https://laravel-livewire.com/docs/2.x/alpine-js)  

## Getting started

Generate site:
```bash
./vendor/bin/jigsaw build
```

Preview site:
```bash
./vendor/bin/jigsaw serve
```

Preview with `browserSync`:
```bash
yarn dev
```

Visit the following urls for the preview:
- `http://localhost:8000` in case you're using php way
- `http://localhost:3000` in case you're using browsersync
