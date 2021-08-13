@extends('layouts.index')
@section('title','お野菜バルEmisaiについて')
@section('content')
  <div class="about">
    <div class="about_title">
      <h2>Emisaiについて</h2>
      <p class="title_background">
        About
      </p>
    </div>
    <div class="about_pic">
      <img src="{{asset('/images/emisai_logo.jpg')}}">
    </div>
    <div class="about_content">
      <table class="about_table">
        <tr class="about_tr">
          <th class="about_th">住所</th>
          <td class="about_td">	滋賀県草津市野路6-5-3 TOMO-STAGE98 1F</td>
        </tr>
        <tr class="about_tr">
          <th class="about_th">アクセス</th>
          <td class="about_td">	ＪＲ東海道本線南草津駅東口より徒歩約6分</td>
        </tr>
        <tr class="about_tr">
          <th class="about_th">電話番号</th>
          <td class="about_td">	077-598-6012</td>
        </tr>
        <tr class="about_tr">
          <th class="about_th">営業時間</th>
          <td class="about_td">11:00〜23:30（LO:23:00）
        </tr>
        <tr class="about_tr">
          <th class="about_th">定休日</th>
          <td class="about_td">	日曜日</td>
        </tr>
        <tr class="about_tr">
          <th class="about_th">予約</th>
          <td class="about_td"><a href="https://www.hotpepper.jp/strJ001236995/yoyaku/?vos=cphppallall0130116001">ホットペッパー</a> </td>
        </tr>
      </table>
    </div>
  </div>
@endsection
