<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="General DDD Laravel Tempalte">
    <meta name="author" content="Frank Gan">
    <meta name="email" content="Axundeveloper0402@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title', '新頁面')</title>

    @vite('app/Interfaces/Http/resources/ts/app.js')

</head>
<body>
    <div class="text">
        <div class="one"></div>
    </div>
</body>
</html>
