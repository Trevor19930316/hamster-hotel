<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/frontend/templates/navbar.css')}}" rel="stylesheet">
    <!-- js -->
{{--    <script src="{{asset('js/frontend/templates/include/navbar.js')}}"></script>--}}

    <title>@yield('title')</title>
</head>
<body>
<div class="main-body">

    @include('frontend.template.include.navbar')

    <div class="main-content">
        @yield('content')
    </div>

</div>
</body>
</html>
