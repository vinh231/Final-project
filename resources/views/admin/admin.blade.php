<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administrator</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="padding-top: 100px;">
<div id="app">
    @if (Auth::guard('admin')->check())
        @include('admin.nav')
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @yield('left-column')
            </div>
            <div class="col-md-10 content">
                @include('layouts.error')
                @yield('content')
            </div>
        </div>
    </div>

    <hr/>
    <footer class="footer">
        <p class="text-center">In-store pricing may vary. Prices and offers are subject to change. © 2021 All rights reserved. VIN PLAYSTATION, the VIN PLAYSTATION logo, the tag design, and MY VIN PLAYSTATION are trademarks of Vin PlayStation and its affiliated companies.</p>
    </footer>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/admin_script.js') }}"></script>
</body>
</html>