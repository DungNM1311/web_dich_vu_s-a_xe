@extends('admin.layout.index')
@section('title')
dichvu
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Page_DichVu.css')}}">
<form action="{{route('PostAddDichVu')}}" method="post">
  {{csrf_field()}}
  <div class="background">
  <div class="pop-up">
    <div class="heading">
      <h3>Update Thông Tin Dịch Vụ</h3>
    </div>
    
    <div class="container">
      <table class="service">
        <thead>
          <th colspan="1">Id</th>
          <th colspan="1">Dịch Vụ</th>
          <th colspan="1">Loại xe</th>
          <th colspan="1">Giá</th>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="text" name="id" readonly="readonly" value="{{$id}}">
            </td>
            <td>
              <input type="text" name="tendichvu">
            </td>
            <td>
              <input type="text" name="loaixe">
            </td>
            <td>
              <input type="text" name="gia">
            </td>
          </tr>
        </tbody>
        <tbody>
          <th colspan="4">
            <input type="submit" name="save" value="ADD" >
          </th>
        </tbody>
    </table>
    </div>
  </div>
</div>  
</form>
@endsection 