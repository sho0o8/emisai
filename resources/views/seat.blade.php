@extends('layouts.index')
@section('title','店内の雰囲気')
@section('content')
  <div class="seat">
    <div class="seat_title">
      <h2>店内の雰囲気</h2>
      <p class="title_background">
        Seat
      </p>
    </div>
    <div class="table_content">
      <div class="table_title">
        <h2>Table</h2>
        <p>32名様まで</p>
      </div>
      <div class="table_pic">
        <img src="{{asset('/images/emisai_table1.jpg')}}">
        <img src="{{asset('/images/emisai_table2.jpg')}}">
      </div>
    </div>
    <div class="counter_content">
      <div class="counter_title">
        <h2>Counter</h2>
        <p>6名様まで</p>
      </div>
      <div class="counter_pic">
        <img src="{{asset('/images/emisai_counter1.jpg')}}">
        <img src="{{asset('/images/emisai_counter2.jpg')}}">
      </div>
    </div>
  </div>
@endsection