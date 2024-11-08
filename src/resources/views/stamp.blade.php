@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('header')
<header class="header">
    <img class="header-icon" src="{{ asset('img/icon-black.png') }}" alt="">
    <div class="header-nav">
        <a class="header-nav--item" href="{{ route('stamp') }}">ホーム</a>
        <a class="header-nav--item" href="{{ route('attendance') }}">日付一覧</a>
        @if (Auth::check())
        <a class="header-nav--item" href="{{ route('index') }}">ログアウト</a>
        @endif
    </div>
</header>
@endsection
<!-- 以下、内容。 -->
@section('content')
<h3 class="content-title">さんお疲れ様です！</h3>
<form action="" method="get"><!-- フォーム内容の取得。 -->
    <div class="content__button">
        <button class="content__button-item" style="cursor:pointer" name="atte-button" value="勤務開始">勤務開始</button>
        <button class="content__button-item" style="cursor:pointer" name="atte-button" value="勤務終了">勤務終了</button>
        <button class="content__button-item" style="cursor:pointer" name="atte-button" value="休憩開始">休憩開始</button>
        <button class="content__button-item" style="cursor:pointer" name="atte-button" value="休憩終了">休憩終了</button>
    </div>
</form>
@endsection