<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vuebnb</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div id="toolbar">
    <img class="icon" src="{{asset('images/logo.png')}}">
    <h1>vuebnb</h1>
</div>
<div id="app">
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
