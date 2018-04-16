@extends('layouts.index')
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
      <h3>WRENCH SERVICES</h3>
    </div>
    
    <div class="container">
      <table class="service">
        <thead>
          <th colspan="1">Dịch Vụ</th>
          <th colspan="1">Loại xe</th>
          <th colspan="1">Giá</th>
          <th colspan="1">Edit</th>
          <th colspan="1">Xóa</th>
        </thead>

        @foreach($infor as $tl )
          <tbody>
            <tr>
              <td class="name">{{$tl->TenDichVu}}</td>               
              <td>{{$tl->TenPhuongTien}}</td>
              <td>${{$tl->Gia}}</td>
              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="EditDichVu/{{$tl->id}}"> Edit</a></td>
              <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="DeleteDichVu/{{$tl->id}}" onclick="return confirm('Are you sure?')"> Delete</a></td>
            </tr>
          </tbody>

          <script>
              var x = confirm("Are you sure you want to delete?");
              if (x)
              {
                return true;
              }         
              else
                return false;
          </script>          
        @endforeach
        
        <thead>
          <td colspan="5" text-align="center"><a href="AddDichVu">Thêm Dịch Vụ</a></td>
        </thead>
    </table>
    </div>
  </div>
</div>
@endsection