<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="General DDD Laravel Tempalte">
    <meta name="author" content="Frank Gan">
    <meta name="email" content="Axundeveloper0402@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title', '後臺')</title>

    @vite([
        'app/interfaces/http/resources/scss/app.scss',
        'app/interfaces/http/resources/scss/backend/app.scss',
        'app/interfaces/http/resources/js/app.ts',
        'app/interfaces/http/resources/js/backend/app.ts'
    ])

    @stack('style')

</head>
<body>

    @include('backend.templates.navbar')

    @yield('app')

    @include('backend.templates.footer')

    @stack('script')

</body>
</html>