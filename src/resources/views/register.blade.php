@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
<h3 class="content-title">会員登録</h3>
<!-- フォーム内容の取得。 -->
<!-- register.storeというルートのURL -->
<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div class="content"><!-- 名前の入力フォーム。 -->
        <input class="content-list" type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
    </div>
    <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
    </div>
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
    <div class="content"><!-- 確認用パスワードの入力フォーム。 -->
        <input class="content-list" type="password" name="password_confirmation" placeholder="確認用パスワード" />
    </div>
    <div class="form__error">
        @error('password_confirmation')
        {{ $message }}
        @enderror
    </div>
    <div class="content__button-cover">
        <a class="content__button" type="button" name="form-button" value="login" href="{{ route('index') }}">登録する</a>
    </div>
</form>
<div class="content__login">
    <p class="content__login-text">アカウントをお持ちの方はこちらから</p>
    <a class="content__login-button" href="{{ route('login') }}">ログイン</a>
</div>
@endsection