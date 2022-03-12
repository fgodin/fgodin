    @extends('layouts.app')

    @section('content')
    <!-- CONTACT -->
    <section class="flex bottom-screen bg-neutral-200 text-neutral-900">
        <div class="container mx-auto flex flex-col items-center space-y-5 p-5">
            <h3 class="uppercase text-xl font-black">Contact me for more information</h3>
            @if (session('status'))
            <p class="self-center font-thin text-green-500">{{ session('status') }}</p>
            @endif
            <form action="/contact" method="POST" class="flex flex-col space-y-8">
                {{ csrf_field() }}
                <div class="flex flex-col space-y-8 md:flex-row md:space-y-0 md:space-x-5">
                    <div class="relative">
                        <label for="text" class="absolute -top-6 left-3 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">Full Name</label>
                        <input type="text" class="form-input rounded-lg bg-blue-200 border-none shadow" name="full_name" placeholder="John Doe" value="{{ old('full_name') }}" required />
                        @error('full_name')
                        <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <label for="email" class="absolute -top-6 left-3 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">E-mail</label>
                        <input type="email" class="form-input rounded-lg bg-blue-200 border-none shadow" name="email" placeholder="email@example.com" value="{{ old('email') }}" required />
                        @error('email')
                        <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="relative">
                    <label for="text" class="absolute -top-6 left-3 text-sm">Phone Number</label>
                    <input type="text" class="form-input rounded-lg w-full bg-blue-200 border-none shadow" name="phone_number" placeholder="(123) 456-7890" value="{{ old('phone_number') }}" />
                    @error('phone_number')
                    <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="relative">
                    <label for="textarea" class="absolute -top-6 left-3 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">Message</label>
                    @error('message')
                    <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                    @enderror
                    <textarea type="textarea" class="form-textarea rounded-lg w-full bg-blue-200 border-none shadow" name="message" rows="6" placeholder="Message" value="{{ old('message') }}" required></textarea>
                </div>
                <button type="submit" class="rounded-lg w-full md:w-1/2 self-end bg-neutral-900 uppercase font-black text-blue-400 border-none p-2">Send</button>
            </form>
        </div>
    </section>
    @endsection