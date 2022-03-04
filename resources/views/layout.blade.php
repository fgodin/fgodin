<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Frédéric Godin</title>
</head>
<body class="bg-neutral-900 text-neutral-300 font-sans">
    <header class="sticky top-0 bg-neutral-900 border-b border-blue-300 shadow-sm shadow-neutral-900">
        <div class="container mx-auto">
            <div class="flex justify-center items-center h-16 px-3">
                <a class="flex flex-1 justify-start text-3xl font-medium hover:animate-pulse" href="#home">
                    <span><span class="text-blue-300">f</span>godin</span>
                    <span class="text-blue-300 animate-ping">.</span>
                    <span>dev</span>
                </a>
                <nav class="hidden md:flex flex-1 justify-center space-x-4 text-lg font-thin">
                    <a class="hover:animate-pulse hover:text-blue-300" href="#about-me">About Me</a>
                    <a class="hover:animate-pulse hover:text-blue-300" href="#projects">Projects</a>
                    <a class="hover:animate-pulse hover:text-blue-300" href="#contact">Contact</a>
                </nav>
                <nav class="flex flex-1 justify-end md:order-1 space-x-4 text-lg font-thin">
                    <a class="text-blue-300 hover:animate-pulse hover:text-neutral-300" href="https://github.com/fgodin" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                    <a class="text-blue-300 hover:animate-pulse hover:text-neutral-300" href="https://www.reddit.com/user/fgodin-dev" target="_blank"><i class="fa-brands fa-reddit-alien fa-lg"></i></a>
                    <div class="md:hidden flex items-center">
                        <button class="outline-none">
                            <svg
                            class="w-7 h-7 text-blue-300"
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section id="home" class="flex justify-center items-center min-h-screen">
            <div class="container mx-auto">
                <p class="flex justify-center uppercase">Home</p>
            </div>
        </section>
        <section id="about-me" class="flex justify-center items-center min-h-screen bg-neutral-300 text-neutral-900 uppercase">
            About Me
        </section>
        <section id="projects" class="flex justify-center items-center min-h-screen uppercase">
            Projects
        </section>
        <section id="contact" class="flex justify-center items-center min-h-screen bg-neutral-300 text-neutral-900 uppercase">
            Contact
        </section>
    </main>
    <footer class="flex justify-center items-center">
        Copyright © 2022 fgodin.dev
    </footer>
</body>
</html>