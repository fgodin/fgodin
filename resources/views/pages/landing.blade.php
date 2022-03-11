    @extends('layouts.app')

    @section('content')
    <!-- HOME -->
    <section id="home" class="flex screen bg-home-background text-neutral-200 bg-cover bg-fixed">
        <div class="relative container mx-auto flex flex-col items-center space-y-5 p-5 2xl:p-0 2xl:pt-5 2xl:pb-5">
            <div class="flex h-64 w-64 bg-avatar bg-cover rounded-full shadow-sm shadow-neutral-900"></div>
            <div class="flex flex-col text-center space-y-3 rounded-lg backdrop-blur-lg backdrop-opacity-80 backdrop-brightness-75 shadow-sm shadow-neutral-900 p-3">
                <h1 class="uppercase text-3xl">Hi! My name is <span class="text-blue-400">Frédéric Godin</span> and I like building websites.</h1>
                <p class="text-xl text-justify tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in pellentesque ligula. Integer consequat in mauris id tristique. Duis mattis tincidunt eros. Suspendisse auctor finibus purus. Sed mollis, orci non bibendum fringilla, magna ligula elementum tellus, at pellentesque magna libero eu felis. Pellentesque placerat tincidunt nisi, sit amet congue nisi varius id. Morbi arcu quam, cursus at justo vitae, tempor cursus metus. Etiam vel pulvinar leo. Nam velit urna, cursus id iaculis eget, finibus et nibh.</p>
                <p class="text-xl text-justify tracking-wide">Pellentesque tristique nisi egestas, egestas lectus nec, rhoncus enim. Nulla odio urna, volutpat a orci et, fringilla facilisis velit. Proin ut erat aliquet, finibus urna vitae, sagittis nulla. Duis a velit sed risus gravida congue eget ut arcu. Donec vestibulum, ligula at blandit tincidunt, metus lorem pharetra lorem, eu lobortis leo eros ac ex. Nullam blandit molestie arcu, vitae varius mauris feugiat in. Integer gravida scelerisque dignissim. Aenean vel felis quis lectus pulvinar molestie. Praesent massa nisi, dapibus in tellus vitae, pellentesque pharetra sapien. Maecenas in venenatis sem. Sed scelerisque enim vulputate, dignissim neque et, convallis velit. Nulla tortor est, convallis id pellentesque ac, faucibus id urna.</p>
                <div class="flex justify-around text-blue-400 opacity-50">
                    <div><i class="fa-brands fa-html5 fa-2xl"></i></div>
                    <div><i class="fa-brands fa-css3 fa-2xl"></i></div>
                    <div><i class="fa-brands fa-php fa-2xl"></i></div>
                    <div><i class="fa-brands fa-laravel fa-2xl"></i></div>
                    <div><i class="fa-brands fa-git fa-2xl"></i></div>
                    <div><i class="fa-brands fa-js-square fa-2xl"></i></div>
                    <div><i class="fa-brands fa-npm fa-2xl"></i></div>
                </div>
            </div>
            <div class="hidden 2xl:flex absolute bottom-5 mx-auto animate-bounce">
                <a href="#about-me">
                    <i class="fa-solid fa-arrow-down-long fa-2xl"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ABOUT-ME -->
    <section id="about-me" class="flex flex-col screen bg-neutral-200 text-neutral-900">
        <div class="container m-auto flex flex-col space-y-5 md:flex-row md:space-y-0 md:space-x-5 p-5 md:p-0 md:pt-5 md:pb-5">
            <div class="relative flex flex-1 flex-col items-center p-3 rounded-lg border border-neutral-200 shadow-sm shadow-neutral-900">
                <h2 class="uppercase font-black text-lg text-neutral-900">Experience</h2>
                <p class="text-justify">Suspendisse aliquet tellus a venenatis fermentum. Pellentesque nibh eros, iaculis non bibendum non, facilisis sit amet dolor. Duis sit amet elit egestas, vulputate tortor sed, sagittis libero. Integer quis felis mi. Praesent venenatis porta dui, ut laoreet sem finibus in. Maecenas ut nisi nec mauris malesuada volutpat fringilla in odio. Nullam viverra mauris enim, quis dictum eros elementum et. Mauris quis neque at tortor efficitur porta et sed dui. Etiam pellentesque interdum arcu eu hendrerit. Sed luctus quis erat id fermentum. Etiam non congue massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque porttitor quis felis nec aliquet. Praesent ac imperdiet lacus, eu dignissim nunc. Sed luctus quis erat id fermentum. Etiam non congue massa. Curabitur vitae accumsan nunc. Proin sagittis leo ac lacus euismod, in vestibulum arcu sollicitudin.</p>
                <div class="absolute top-3 right-3 text-blue-400"><i class="fa-solid fa-briefcase fa-lg"></i></div>
            </div>
            <div class="relative flex flex-1 flex-col items-center p-3 rounded-lg border border-neutral-200 shadow-sm shadow-neutral-900">
                <h2 class="uppercase font-black text-lg text-neutral-900">Skills</h2>
                <p class="text-justify">Pellentesque tristique nisi egestas, egestas lectus nec, rhoncus enim. Nulla odio urna, volutpat a orci et, fringilla facilisis velit. Proin ut erat aliquet, finibus urna vitae, sagittis nulla. Duis a velit sed risus gravida congue eget ut arcu. Donec vestibulum, ligula at blandit tincidunt, metus lorem pharetra lorem, eu lobortis leo eros ac ex. Nullam blandit molestie arcu, vitae varius mauris feugiat in. Integer gravida scelerisque dignissim. Aenean vel felis quis lectus pulvinar molestie. Sed luctus quis erat id fermentum. Etiam non congue massa. Praesent massa nisi, dapibus in tellus vitae, pellentesque pharetra sapien. Maecenas in venenatis sem. Sed scelerisque enim vulputate, dignissim neque et, convallis velit. Nulla tortor est, convallis id pellentesque ac, faucibus id urna. Sed luctus quis erat id fermentum. Etiam non congue massa. Curabitur vitae accumsan nunc. Sed luctus quis erat id fermentum. Etiam non congue massa.</p>
                <div class="absolute top-3 right-3 text-blue-400"><i class="fa-solid fa-code fa-lg"></i></div>
            </div>
            <div class="relative flex flex-1 flex-col items-center p-3 rounded-lg border border-neutral-200 shadow-sm shadow-neutral-900">
                <h2 class="uppercase font-black text-lg text-neutral-900">Personal</h2>
                <p class="text-justify">Aliquam sed ante blandit, ultricies lacus et, feugiat tellus. Sed quis nulla id ex dapibus tincidunt at quis lacus. Nullam dui neque, viverra eget dolor ac, imperdiet suscipit enim. Vestibulum commodo justo eu euismod congue. Integer ultricies mi suscipit risus blandit, sit amet laoreet nulla consequat. Nullam euismod interdum eleifend. Sed in lacinia urna. Maecenas posuere sodales urna eu porta. Sed suscipit elementum mi non placerat. Nullam vitae gravida dui, non tristique arcu. Sed vel massa nec libero blandit blandit ac vitae neque. Curabitur sed lorem id nulla porttitor maximus. Sed luctus quis erat id fermentum. Etiam non congue massa. Nam dapibus, erat eget blandit posuere, nisi lectus euismod nisi, nec scelerisque nisi elit vitae tellus. Sed luctus quis erat id fermentum. Etiam non congue massa. Curabitur vitae accumsan nunc. Sed luctus quis erat id fermentum. Etiam non congue massa.</p>
                <div class="absolute top-3 right-3 text-blue-400"><i class="fa-solid fa-fingerprint fa-lg"></i></div>
            </div>
        </div>
        <div class="container m-auto flex flex-col space-y-5 md:flex-row md:space-y-0 md:space-x-5 p-5 pt-0 md:p-0 md:pb-5">
            <div class="flex flex-col items-center space-y-3 p-3 w-full rounded-lg bg-neutral-900 text-neutral-200 border border-neutral-200 shadow-sm shadow-neutral-900">
                <h2 class="uppercase font-black text-lg">Recent Blog Posts</h1>
                <div class="container mx-auto flex flex-col md:flex-row">
                    <div class="flex flex-1 flex-col p-3">
                        <h3 class="uppercase underline font-black text-blue-400">This is an article</h3>
                        <p class="text-justify">Duis sit amet elit egestas, vulputate tortor sed, sagittis libero. Phasellus at cursus odio. Aliquam vitae magna sed nulla mattis ultrices nec consectetur quam. Nam dictum ultrices elit, sed sodales metus elementum quis. Vestibulum dignissim nisi ut porttitor faucibus. Nullam sem nulla, tincidunt quis ultrices id, pulvinar nec lectus. Phasellus malesuada eu diam egestas luctus. Vivamus efficitur, magna vitae commodo vehicula, felis nisl blandit libero, sed rutrum enim quam id lectus. Aliquam venenatis nisi at orci tempus, a elementum sem viverra. Fusce condimentum arcu dui, ac dapibus justo rhoncus vel. Nulla non pretium ex.</p>
                        <p class="text-blue-400">Read more...</p>
                    </div>
                    <div class="flex flex-1 flex-col p-3">
                        <h3 class="uppercase underline font-black text-blue-400">This is an article</h3>
                        <p class="text-justify">Vivamus consequat leo in condimentum imperdiet. Aenean fermentum nunc a ipsum vulputate tempus. Ut ac iaculis felis, nec dictum augue. Suspendisse auctor eu erat eget finibus. Integer ac odio congue, mollis dolor eget, egestas metus. Nam commodo est sed ex porta, a consectetur elit rhoncus. Sed finibus arcu id diam ultricies, eu mollis metus semper. Praesent eu lectus id nisi facilisis tristique. Sed hendrerit justo quis interdum suscipit. Donec vitae felis iaculis, iaculis erat in, auctor enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis enim sodales, rhoncus lorem quis, lacinia tortor.</p>
                        <p class="text-blue-400">Read more...</p>
                    </div>
                    <div class="flex flex-1 flex-col p-3">
                        <h3 class="uppercase underline font-black text-blue-400">This is an article</h3>
                        <p class="text-justify">Integer quis felis mi. Praesent venenatis porta dui, ut laoreet sem finibus in. Maecenas ut nisi nec mauris malesuada volutpat fringilla in odio. Nullam viverra mauris enim, quis dictum eros elementum et. Mauris quis neque at tortor efficitur porta et sed dui. Etiam pellentesque interdum arcu eu hendrerit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque porttitor quis felis nec aliquet. Praesent ac imperdiet lacus, eu dignissim nunc. Sed luctus quis erat id fermentum. Etiam non congue massa. Curabitur vitae accumsan nunc.</p>
                        <p class="text-blue-400">Read more...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROJECTS -->
    <section id="projects" class="flex bottom-screen bg-neutral-900 text-neutral-200">
        <div class="container mx-auto flex flex-col items-center p-5">
            <h1 class="uppercase text-3xl">Projects</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 w-full h-full p-5">
                <div class="flex flex-1 flex-col justify-between p-3 rounded-lg bg-neutral-400 shadow-md shadow-blue-400">
                    <h2 class="uppercase text-lg font-black text-neutral-900">Project Name</h2>
                    <p class="text-neutral-900">Project description goes here.</p>
                </div>
                <div class="flex flex-1 flex-col justify-between p-3 rounded-lg bg-neutral-400 shadow-md shadow-blue-400">
                    <h2 class="uppercase text-lg font-black text-neutral-900">Project Name</h2>
                    <p class="text-neutral-900">Project description goes here.</p>
                </div>
                <div class="flex flex-1 flex-col justify-between p-3 rounded-lg bg-neutral-400 shadow-md shadow-blue-400">
                    <h2 class="uppercase text-lg font-black text-neutral-900">Project Name</h2>
                    <p class="text-neutral-900">Project description goes here.</p>
                </div>
            </div>
        </div>
    </section>
    @endsection