@extends('layouts.index')
@section('title','お野菜バルEmisaiの特徴')
@section('content')
  <div class="point">
    <div class="point_title">
      <h2>Emisaiの特徴</h2>
      <p class="title_background">
        Point
      </p>
    </div>
    <div class="point_main">
        <div class="point_content point01">
          <div class="point_pic">
            <img src="{{asset('/images/emisai_menu2.jpg')}}">
          </div>
          <div class="point_content_title">
            <h1>01</h1>
            <h3>アラカルトがコスパ◎</h3>
            <p>お料理は300円・500円の2種のプライスラインに統一しています！</p>
          </div>
        </div>
        <div class="point_content point02">
          <div class="point_pic">
            <img src="{{asset('/images/emisai_nouka.png')}}">
          </div>
          <div class="point_content_title">
            <h1>02</h1>
            <h3>自慢の農家さん○</h3>
            <p>地元滋賀を中心に北は北海道、南は種子島まで選りすぐりの生産者さんと直接契約してます！</p>
          </div>
        </div>
        <div class="point_content point03">
          <div class="point_pic beer_pic">
            <img src="{{asset('/images/emisai_beer1.1.jpg')}}">
          </div>
          <div class="point_content_title">
            <h1>03</h1>
            <h3>繊細な味わい★</h3>
            <p>国産の生クラフトビールはもちろん、世界のクラフトビールも小瓶にて取り揃えております！</p>
          </div>
        </div>
        <div class="point_content point04">
          <div class="point_pic">
            <img src="{{asset('/images/emisai_tennai.jpg')}}">
          </div>
          <div class="point_content_title">
            <h1>04</h1>
            <h3>開放感溢れる空間♪</h3>
            <p>ゆったりと配置したテーブル席、カウンター席でお食事をお楽しみいただけます。</p>
          </div>
        </div>
    </div>
  </div>
@endsection