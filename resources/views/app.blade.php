<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPA-samples</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
    window.Laravel = {
        csrfToken: "{{ csrf_token() }}"
    };
    </script>
</head>
<body>
<div id="app" class="container">
    <div class="header">
        {{$description = __('messages.site-description') }}
        <navbar description="{{$description}}"></navbar>
    </div>
    <div class="wrapper">
        <div class="main">
            <h2>Contetns</h2>
            <hr>
            <router-view price="{{__('labels.price')}}"></router-view>
        </div>
    </div>
    <div class="footer">
        <nav-footer></nav-footer>
    </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
