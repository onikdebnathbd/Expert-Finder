<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('auth.layouts.head')

<body>
{{--@include('auth.layouts.header')--}}
{{--@auth
@endauth--}}

<main>
    @yield('main-content')
</main>

@include('auth.layouts.footer')
</body>

</html>
