<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <title>Atte</title>
</head>

<body>
    <!-- 以下、内容。 -->
    <center>
        <div class="content-cover">
            <div class="content__title">
                <img class="content__title-icon" src="{{ asset('img/icon-black.png') }}" alt="">
                <p class="content__title-text"> - 勤怠管理システム - </p>
            </div>
            <div class="content__button-cover">
                <p class="content__button-text">おかえりなさい！</p>
                <a class="content__button" href="{{ route('login') }}" name="login-button" value="login">ログイン</a>
            </div>
            <div class="content__register">
                <p class="content__register-text">アカウントをお持ちでない方はこちらから</p>
                <a class="content__register-button" href="{{ route('register') }}">会員登録</a>
            </div>
        </div>
        <footer class="content__footer">
            <small class="content__footer-text">Atte, inc.</small>
        </footer>
    </center>
</body>

</html>