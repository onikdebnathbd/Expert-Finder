<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('user.layouts.head')

<body>
@include('user.layouts.header')
{{--@auth
@endauth--}}

<main>
    @yield('main-content')
</main>

@include('user.layouts.footer')
</body>

</html>
