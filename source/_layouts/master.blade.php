<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="w-screen h-screen p-16 antialiased text-gray-900 bg-white font-inter">
    
        <div class="mx-auto container print:max-w-full">
            @yield('body')
        </div>

        <div class="max-w-a4 mx-auto border-gray-100 print:max-w-full">
            @yield('resume')
        </div>
        
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
