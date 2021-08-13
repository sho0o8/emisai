@extends('layouts.index')
@section('title','店内の雰囲気')
@section('content')
<div class="access">
  <div class="access_title">
    <h2>Emisaiへの行き方</h2>
    <p class="title_background">
      Access
    </p>
  </div>
  <div class="access_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.1313491291353!2d135.9495823161204!3d35.003416980357954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60017317b57d1631%3A0xa85ffa316e77f1ec!2z44GK6YeO6I-c44OQ44OrIEVNSVNBSQ!5e0!3m2!1sja!2sjp!4v1627804946784!5m2!1sja!2sjp" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="access_content">
      <table class="access_main">
        <tr class="access_tr">
          <th class="access_th">
            住所
          </th>
          <td class="access_td">
            滋賀県草津市野路6-5-3 TOMO-STAGE98 1F
          </td>
        </tr>
        <tr class="access_tr">
          <th class="access_th">
            交通手段
          </th>
          <td class="access_td">
          ＪＲ東海道本線南草津駅東口 徒歩5分
          </td>
        </tr>
        <tr class="access_tr">
          <th class="access_th">
            駐車場
          </th>
          <td class="access_td">
            有：専用無料3台 
            <br>※１グループ様１台のみ利用可
          </td>
        </tr>
      </table>
  </div>
</div>
@endsection