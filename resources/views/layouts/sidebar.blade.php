<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AtlasBulletinBoard</title>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Oswald:wght@200&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- API wiki検索のjs -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>
  <script src="sketch.js"></script> -->
</head>

<body class="all_content">
  <div class="d-flex">
    <div class="sidebar">
      @section('sidebar')
      <p @if (strpos( url()->current() ,"top") !==false)class="active" @endif><a href="{{ route('top.show') }}"> <i class="far fa-angry">トップ</i></a></p>
      <p><a href="/logout"> <i class="fab fa-grunt"></i>ログアウト</a></p>
      <p @if (url()->current() === "http://127.0.0.1:8000"."/"."calendar"."/".Auth::id())class="active" @endif><a href="{{ route('calendar.general.show',['user_id' => Auth::id()]) }}"> <i class="far fa-grin-tongue-wink"></i>スクール予約</a></p>
      @can('admin')
      <p @if (strpos( url()->current() ,"calendar"."/".Auth::id()."/"."admin") !==false)class="active" @endif><a href="{{ route('calendar.admin.show',['user_id' => Auth::id()]) }}"> <i class="far fa-id-badge"></i>スクール予約確認</a></p>
      <p @if (strpos( url()->current() ,"setting") !==false)class="active" @endif><a href="{{ route('calendar.admin.setting',['user_id' => Auth::id()]) }}"> <i class="fas fa-poo"></i>スクール枠登録</a></p>
      @endcan
      <p @if (strpos( url()->current() ,"bulletin_board") !==false)class="active" @endif><a href="{{ route('post.show') }}"> <i class="fas fa-star"></i>掲示板</a></p>
      <p @if (strpos( url()->current() ,"show") !==false)class="active" @endif><a href="{{ route('user.show') }}"><i class="fas fa-child"></i>ユーザー検索</a></p>
      <p @if (strpos( url()->current() ,"images") !==false)class="active" @endif><a href="{{route('image')}}"><i class="fas fa-child"></i>画像</a></p>
      <p @if (strpos( url()->current() ,"wiki") !==false)class="active" @endif><a href="{{route('wiki.show')}}"><i class="fas fa-child"></i>wiki検索</a></p>
      <p @if (strpos( url()->current() ,"chat") !==false)class="active" @endif><a href="{{route('chat.show')}}"><i class="fas fa-child"></i>チャット</a></p>

      @show
    </div>
    <div class="main-container">
      @yield('content')
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/register.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/bulletin.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/user_search.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/calendar.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/sketch.js') }}" rel="stylesheet"></script>
</body>

</html>