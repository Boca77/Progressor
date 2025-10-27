<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if(!Request::is('login-signup'))
        <div class="p-5">
            @include('layout.nav')
            @yield('content')
        </div>
        @include('layout.footer')
    @else
        <div>
            @yield('content')
        </div>
    @endif
        
</body>

</html>
