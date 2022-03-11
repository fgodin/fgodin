    <!-- HEADER -->
    <header class="z-50 sticky top-0 bg-neutral-900 text-neutral-200 border-b border-blue-400 shadow-sm shadow-neutral-900">
        <div class="container mx-auto">
            <div class="flex justify-center items-center h-16 px-3">
                <div class="flex flex-1 justify-start w-auto text-3xl font-medium hover:animate-pulse">
                    <a class="flex" href="/">
                        <span><span class="text-blue-400">f</span>godin</span>
                        <span class="text-blue-400 animate-ping">.</span>
                        <span>dev</span>
                    </a>
                </div>
                <nav class="hidden md:flex flex-1 justify-center space-x-4 text-lg font-thin">
                    <a class="hover:animate-pulse hover:text-blue-400" href="/#about-me">About Me</a>
                    <a class="hover:animate-pulse hover:text-blue-400" href="/#projects">Projects</a>
                    <a class="hover:animate-pulse hover:text-blue-400" href="/contact">Contact</a>
                </nav>
                <nav class="flex flex-1 justify-end md:order-1 space-x-4 text-lg font-thin">
                    <a class="text-blue-400 hover:animate-pulse hover:text-neutral-200" href="https://github.com/fgodin" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                    <a class="text-blue-400 hover:animate-pulse hover:text-neutral-200" href="https://www.reddit.com/user/fgodin-dev" target="_blank"><i class="fa-brands fa-reddit-alien fa-lg"></i></a>
                    <a class="text-blue-400 hover:animate-pulse hover:text-neutral-200" href="https://stackoverflow.com/users/5438729/fgodin" target="_blank"><i class="fa-brands fa-stack-overflow fa-lg"></i></a>
                    <button class="toggle-menu md:hidden outline-none text-blue-400 hover:animate-pulse hover:text-neutral-200"><i class="fa fa-bars fa-lg"></i></button>
                </nav>
            </div>
        </div>
    </header>
    <!-- RESPONSIVE NAV -->
    <nav class="z-50 mobile-menu hidden md:hidden sticky top-16 py-3 flex flex-col justify-center items-center space-y-4 bg-neutral-700 text-neutral-200 border-b border-neutral-900 shadow-sm shadow-neutral-900">
        <a class="hover:animate-pulse hover:text-blue-400" href="/#about-me">About Me</a>
        <a class="hover:animate-pulse hover:text-blue-400" href="/#projects">Projects</a>
        <a class="hover:animate-pulse hover:text-blue-400" href="/contact">Contact</a>
    </nav>