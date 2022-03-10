<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.header')
</head>
<body class="bg-neutral-900 text-neutral-300 font-sans">
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
</body>
</html>