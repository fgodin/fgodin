    @extends('layouts.app')

    @section('content')
    <!-- CONTACT -->
    <section class="flex bottom-screen bg-neutral-200 text-neutral-900">
        <div class="container mx-auto flex flex-col justify-center items-center space-y-5 p-5">
            <h3 class="uppercase text-xl font-black">Contact me for more information</h3>
            @if (session('status'))
            <p class="self-center font-thin text-green-500">{{ session('status') }}</p>
            @endif
            <form action="/contact" method="POST" class="flex flex-col w-full md:w-3/5 space-y-3">
                {{ csrf_field() }}
                <div class="flex flex-col xl:flex-row xl:justify-between space-y-3 xl:space-y-0">
                    <div class="flex flex-col w-full px-3">
                        <label class="text-sm after:content-['*'] after:ml-0.5 after:text-red-500 px-3">Full Name</label>
                        <input type="text" class="form-input rounded-lg bg-blue-200 @if($errors->has('full_name')) border border-red-500 @else border-none @endif shadow" name="full_name" placeholder="John Doe" value="{{ old('full_name') }}" required />
                        @error('full_name')
                        <p class="text-sm text-red-500 px-3">{{ $message }}</p>  
                        @enderror
                    </div>
                    <div class="flex flex-col w-full px-3">
                        <label class="text-sm after:content-['*'] after:ml-0.5 after:text-red-500 px-3">E-mail</label>
                        <input type="email" class="form-input rounded-lg bg-blue-200 @if($errors->has('email')) border border-red-500 @else border-none @endif shadow" name="email" placeholder="email@example.com" value="{{ old('email') }}" required />
                        @error('email')
                        <p class="text-sm text-red-500 px-3">{{ $message }}</p>  
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col xl:flex-row xl:justify-between space-y-3 xl:space-y-0">
                    <div class="flex flex-col w-full px-3">
                        <label class="text-sm px-3">Phone Number</label>
                        <input type="text" class="form-input rounded-lg w-full bg-blue-200 @if($errors->has('phone_number')) border border-red-500 @else border-none @endif shadow" name="phone_number" placeholder="(123) 456-7890" value="{{ old('phone_number') }}" />
                        @error('phone_number')
                        <p class="text-sm text-red-500 px-3">{{ $message }}</p>  
                        @enderror
                    </div>
                    <div class="flex flex-col w-full px-3">
                        <label class="text-sm after:content-['*'] after:ml-0.5 after:text-red-500 px-3">Reason</label>
                        <select type="select" class="form-select rounded-lg bg-blue-200 @if($errors->has('reason')) border border-red-500 @else border-none @endif shadow" name="reason" required>
                            <option selected disabled hidden></option>
                            <option value="question">Have a question?</option>
                            <option value="services">Requesting my service</option>
                            <option value="chat">Just chat with me!</option>
                        </select>
                        @error('reason')
                        <p class="text-sm text-red-500 px-3">{{ $message }}</p>  
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col px-3">
                    <label class="text-sm after:content-['*'] after:ml-0.5 after:text-red-500 px-3">Message</label>
                    <textarea type="textarea" class="form-textarea rounded-lg w-full bg-blue-200 @if($errors->has('message')) border border-red-500 @else border-none @endif shadow" name="message" rows="6" placeholder="Message" required>{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-sm text-red-500 px-3">{{ $message }}</p>  
                    @enderror
                </div>
                <div class="flex justify-end p-3">
                    <button type="submit" class="rounded-lg w-full xl:w-1/3 bg-neutral-900 uppercase font-black text-blue-400 border-none p-2">Send</button>
                </div>
            </form>
        </div>
    </section>
    @endsection