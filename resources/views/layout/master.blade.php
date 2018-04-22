<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', "Shopping") }}</title>

    <!--styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="">
<div class="body">
    <div class="">
        <div class="right container_col container" role="main">
            <div class="x_panel">
                @yield('content')
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset("js/app.js") }}"></script>
@yield('script')
</body>
</html>