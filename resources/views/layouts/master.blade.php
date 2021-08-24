<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-EXERCISES</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <script src="{{ mix('/js/app.js') }}" defer></script>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link rel="icon"
          type="image/png"
          href="http://example.com/myicon.png">

    <style>
        body {
            margin: 0;
        }
    </style>

</head>
<body>
<div id="app">
    @yield('content')
</div>
</body>
</html>
