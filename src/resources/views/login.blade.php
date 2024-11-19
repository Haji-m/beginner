@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<header class="header">
    <img class="header-icon" src="{{ asset('img/icon-black.png') }}" alt="">
    <div class="header-nav">
        <a class="header-nav--item" href="{{ route('stamp') }}">ホーム</a>
        <a class="header-nav--item" href="{{ route('attendance') }}">日付一覧</a>
        <a class="header-nav--item" href="{{ route('index') }}">ログアウト</a>
    </div>
</header>
@endsection
<!-- 以下、内容。 -->
@section('content')
<h3 class="content-title">ログイン</h3>
<form action="{{ route('stamp') }}" method="post"><!-- フォーム内容の取得。 -->
    @csrf
    <div class="content"><!-- メールアドレスの入力フォーム。 -->
        <input class="content-list" type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
    </div>
    <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
    </div>
    <div class="content"><!-- パスワードの入力フォーム。 -->
        <input class="content-list" type="password" name="password" placeholder="パスワード" />
    </div>
    <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
    </div>
    <div class="content__button-cover">
        <button class="content__button" type="button" name="form-button" value="login">ログイン</button>
    </div>
</form>
<form action="{{ route('register') }}" method="post">
@csrf
    <div class="content__register">
        <p class="content__register-text">アカウントをお持ちでない方はこちらから</p>
        <a class="content__register-button" href="{{ route('register') }}">会員登録</a>
    </div>
</form>
@endsection