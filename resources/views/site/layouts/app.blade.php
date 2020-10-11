<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Home') &mdash; {{ env('APP_NAME') }}</title>
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
</head>

<body>
<div id="app">
    @yield('content')
</div>
</body>
</html>
