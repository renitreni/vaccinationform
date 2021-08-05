<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/adminkit/static/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/alertifyjs/css/alertify.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/alertifyjs/css/themes/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/alertifyjs/css/themes/default.css') }}" rel="stylesheet">

</head>
<body>
<div class="wrapper">
    <div class="main pb-7 bg-white">
        @inertia
    </div>
</div>

<script src="{{ asset('vendor/adminkit/static/js/app.js') }}"></script>
<script src="{{ asset('vendor/alertifyjs/alertify.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ mix('/js/app.js') }}" defer></script>
<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'));
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function (event) {
            event.preventDefault();
            tabTrigger.show()
        })
    });
</script>
</body>
</html>
