@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
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
<div class="content">
    <div class="date">
        <button class="date-button"> ＜ </button>
        <div class="date-text"><span class="data-text--blank">2021-11-20</span class="data-text--blank"></div>
        <button class="date-button"> ＞ </button>
    </div>
    <table class="list">
        <tr class="list-title--cover">
            <th class="list-title">名前</th>
            <th class="list-title">勤務開始</th>
            <th class="list-title">勤務終了</th>
            <th class="list-title">休憩時間</th>
            <th class="list-title">勤務時間</th>
        </tr>
        <tr class="list-time--cover">
            <td class="list-time">テスト太郎</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
        </tr>
        <!-- 他の行も同様に追加 -->
        <tr class="list-time--cover">
            <td class="list-time">テスト太郎</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
        </tr>
        <tr class="list-time--cover">
            <td class="list-time">テスト太郎</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
        </tr>
        <tr class="list-time--cover">
            <td class="list-time">テスト太郎</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
        </tr>
        <tr class="list-time--cover">
            <td class="list-time">テスト太郎</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
            <td class="list-time">時間</td>
        </tr>
    </table>
    <div class="pagination">
        <button class="pagination-button--before"> ＜ </button>
        <button class="pagination-button" id="page1">1</button>
        <button class="pagination-button" id="page2">2</button>
        <button class="pagination-button" id="page3">3</button>
        <button class="pagination-button" id="page4">4</button>
        <button class="pagination-button" id="page5">5</button>
        <button class="pagination-button" id="page6">6</button>
        <button class="pagination-button" id="page7">7</button>
        <button class="pagination-button" id="page8">8</button>
        <button class="pagination-button" id="page9">9</button>
        <button class="pagination-button" id="page10">10</button>
        <button class="pagination-button" id="page11">11</button>
        <button class="pagination-button" id="page12">12</button>
        <button class="pagination-button" id="page13">13</button>
        <button class="pagination-button" id="page14">14</button>
        <button class="pagination-button" id="page15">15</button>
        <button class="pagination-button" id="page16">16</button>
        <button class="pagination-button" id="page17">17</button>
        <button class="pagination-button" id="page18">18</button>
        <button class="pagination-button" id="page19">19</button>
        <button class="pagination-button" id="page20">20</button>
        <button class="pagination-button" id="page21">21</button>
        <button class="pagination-button--after"> ＞ </button>
    </div>
</div>
@endsection