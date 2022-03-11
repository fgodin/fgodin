    @extends('layouts.app')

    @section('content')
    <!-- CONTACT -->
    <section class="flex bottom-screen bg-neutral-200 text-neutral-900">
        <div class="container mx-auto flex flex-col items-center space-y-5 p-5">
            <h2 class="uppercase text-lg font-black">Contact me for more information</h2>
            <form action="" class="flex flex-col space-y-8 p-5">
                <div class="flex flex-col space-y-8 md:flex-row md:space-y-0 md:space-x-5">
                    <div class="relative">
                        <label for="text" class="absolute -top-6 left-3 text-sm">Full Name</label>
                        <input type="text" class="form-input rounded-lg bg-blue-200 border-none shadow" placeholder="John Doe" />
                    </div>
                    <div class="relative">
                        <label for="email" class="absolute -top-6 left-3 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">E-mail</label>
                        <input type="email" class="form-input rounded-lg bg-blue-200 border-none shadow" placeholder="email@example.com" required />
                    </div>
                </div>
                <div class="relative">
                    <label for="text" class="absolute -top-6 left-3 text-sm">Phone Number</label>
                    <input type="text" class="form-input rounded-lg w-full bg-blue-200 border-none shadow" placeholder="(123) 456-7890" />
                </div>
                <div class="relative">
                    <label for="textarea" class="absolute -top-6 left-3 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">Message</label>
                    <textarea type="textarea" class="form-textarea rounded-lg w-full bg-blue-200 border-none shadow" rows="6" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="disabled:opacity-75 rounded-lg bg-neutral-900 uppercase font-black text-blue-400 border-none" disabled>Send To</button>
            </form>
        </div>
    </section>
    @endsection