<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&display=swap" rel="stylesheet">
    <!-- アイコン -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- jQueryライブラリ -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- cssシート -->
    <!-- <link href="{{ asset('css/emisai.css') }}" rel="stylesheet"> -->
    <link href="{{ secure_asset('css/emisai.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <div class="header_right">
            <nav class="header_nav">
                <ul class="header_ul">
                    <li class="header_li"><a href="{{ route('home')}}">Home</a></li>
                    <li class="header_li"><a href="{{ route('about')}}">About</a></li>
                    <li class="header_li"><a href="{{ route('point')}}">Point</a></li>
                    <li class="header_li"><a href="{{ route('seat')}}">Seat</a></li>
                    <li class="header_li"><a href="{{ route('menu')}}">Menu</a></li>
                    <li class="header_li"><a href="{{ route('access')}}">Access</a></li>
                    <li class="header_li"><a href="https://www.instagram.com/emisai2018/?hl=ja"><span class="fa fa-instagram"></span></a></li>
                    <li class="header_li"><a href="https://m.facebook.com/%E3%81%8A%E9%87%8E%E8%8F%9C%E3%83%90%E3%83%AB-%EF%BD%85%EF%BD%8D%EF%BD%89%EF%BD%93%EF%BD%81%EF%BD%89-2119477841605124/"><span class="fa fa-facebook-square"></span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
        <!-- フッター -->
    <footer>
      <div class="copy">
        <p>&copy; お野菜バルEmisai</p>
      </div>
    </footer>
</body>
</html>