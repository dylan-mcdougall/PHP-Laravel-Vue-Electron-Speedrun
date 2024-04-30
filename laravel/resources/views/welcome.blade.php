<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dylan's Blog</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Hi, it me</h1>
        <div id="app" class="font-sans antialiased">
            <mainapp></mainapp>
        </div>
    </body>

</html>
