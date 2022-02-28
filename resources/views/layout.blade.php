<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>fgodin - @yield('title')</title>
    </head>
    <body class="bg-gray-900 text-6xl font-mono">
        <div class="flex justify-center items-center w-screen h-screen">   
            <span class="text-neutral-50 animate-pulse">fgodin</span>
            <span class="text-blue-400 animate-ping">.</span>
            <span class="text-neutral-50 animate-pulse">dev</span>
        </div>
    </body>
</html>