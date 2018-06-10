<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description','湖北卓镁工控设备有限公司')">

    <title>@yield('title', '湖北卓镁工控设备有限公司') </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css?id=p116') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>

    @include('layouts._header')

        <div class="container">
            @include('layouts._message')
            @yield('content')
        </div>

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js?app=sdfsss333') }}"></script>
    @yield('scripts')
</body>
</html>