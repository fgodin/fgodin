<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Frédéric Godin</title>
    </head>
    <body class="flex flex-col justify-center items-center space-y-6 h-screen w-screen bg-neutral-900 text-neutral-50 font-sans">
        <div class="flex justify-center items-center text-8xl">   
            <a class="pointer-events-none block animate-pulse n"><span class="text-blue-300">f</span>godin</a>
            <a class="pointer-events-none block text-blue-300 animate-ping">.</a>
            <a class="pointer-events-none block animate-pulse">dev</a>
        </div>
        <div class="flex justify-center items-center text-2xl font-light text-neutral-700">
            <p before="Come back later!" class="before:content-[attr(before)]"></p>
        </div>
    </body>
</html>