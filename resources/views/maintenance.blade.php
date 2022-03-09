<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>&#128187; Frédéric Godin</title>
    </head>
    <body class="container m-auto flex flex-col justify-center items-center h-screen w-screen bg-neutral-900 text-neutral-300 font-sans">
        <p class="flex text-6xl md:text-8xl font-medium hover:animate-pulse" href="#home">
            <span><span class="text-blue-300">f</span>godin</span>
            <span class="text-blue-300 animate-ping">.</span>
            <span>dev</span>
        </p>
        <div class="flex justify-center items-center text-2xl font-light text-neutral-700">
            <p before="Come back later!" class="before:content-[attr(before)]"></p>
        </div>
    </body>
</html>