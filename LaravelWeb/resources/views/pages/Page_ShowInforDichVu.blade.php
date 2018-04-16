@extends('templates/master')
@section('title')
Dịch Vụ Sửa Xe
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Page_DichVu.css')}}">

<?php
  $id = sizeof($infor)+1;
?>
<div class="background">
  <div class="pop-up">
    <div class="heading">
      <h3>Thông Tin dịch Vụ</h3>
    </div>
    
    <div class="container">
      <table class="service">
        <thead>
          <th colspan="1">Dịch Vụ</th>
          <th colspan="1">Loại xe</th>
          <th colspan="1">Giá</th>
        </thead>

        @foreach($infor as $tl )
          <tbody>
            <tr>
              <td class="name">{{$tl->TenDichVu}}</td>               
              <td>{{$tl->TenPhuongTien}}</td>
              <td>${{$tl->Gia}}</td>
            </tr>
          </tbody>         
        @endforeach
    </table>
    </div>
  </div>
</div>
@endsection