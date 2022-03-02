<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Frédéric Godin</title>
    </head>
    <body class="bg-neutral-900 text-neutral-50 font-sans">
        <header class="sticky top-0 bg-neutral-900 border-b border-blue-300">
            <div class="container mx-auto">
                <div class="flex justify-between items-center h-16 px-5">
                    <nav class="flex flex-1 justify-start space-x-4 text-lg font-thin">
                        <a class="text-blue-300 hover:text-neutral-50" href="https://github.com/fgodin" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                        <a class="text-blue-300 hover:text-neutral-50" href="https://www.reddit.com/user/fgodin-dev" target="_blank"><i class="fa-brands fa-reddit-alien fa-lg"></i></a>
                    </nav>
                    <a class="flex flex-1 justify-center text-3xl font-medium" href="#home">
                        <span class="animate-pulse"><span class="text-blue-300">f</span>godin</span>
                        <span class="text-blue-300 animate-ping">.</span>
                        <span class="animate-pulse">dev</span>
                    </a>
                    <nav class="flex flex-1 flex-nowrap justify-end space-x-4 text-lg font-thin">
                        <a class="hover:text-blue-300" href="#about-me">About Me</a>
                        <a class="hover:text-blue-300" href="#projects">Projects</a>
                        <a class="hover:text-blue-300" href="#contact">Contact</a>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <section id="home" class="flex flex-row justify-center items-center min-h-screen uppercase">
                Home
            </section>
            <section id="about-me" class="flex flex-row justify-center items-center min-h-screen bg-neutral-50 text-neutral-900 uppercase">
                About Me
            </section>
            <section id="projects" class="flex flex-row justify-center items-center min-h-screen uppercase">
                Projects
            </section>
            <section id="contact" class="flex flex-row justify-center items-center min-h-screen bg-neutral-50 text-neutral-900 uppercase">
                Contact
            </section>
        </main>
        <footer class="flex justify-center items-center">
            Copyright © 2022 fgodin.dev
        </footer>
    </body>
</html>