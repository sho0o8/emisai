@extends('layouts.index')
@section('title','お野菜バルEmisai')
@section('content')
    <div class="main">
        <div class="main_content">
            <ul class="slider">
                <li class="slider-item slider-item01"></li>
                <li class="slider-item slider-item02"></li>
                <li class="slider-item slider-item03"></li>
                <li class="slider-item slider-item04"></li>
                <li class="slider-item slider-item05"></li>
            </ul>
            <div class="logo">
                <img src="{{asset('/images/emisailogo.jpeg')}}" alt="logo">
            </div>
            <div class="emisai_name">
                <h3>お野菜バル</h3>
                <h1>Emisai</h1>
            </div>
        </div>
    </div>
    <!-- jQueryライブラリ -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--自作のJS-->
    <script src="{{ asset('js/emisai.js') }}"></script>
@endsection