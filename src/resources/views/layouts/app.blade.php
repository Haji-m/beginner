<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <title>Document</title>
</head>

<body>
    @yield('header')
    <!-- 以下、内容。 -->
    <center>
        <div class="content-cover">
            @yield('content')
        </div>
        <footer class="content__footer">
            <small class="content__footer-text">Atte, inc.</small>
        </footer>
    </center>
</body>

</html>