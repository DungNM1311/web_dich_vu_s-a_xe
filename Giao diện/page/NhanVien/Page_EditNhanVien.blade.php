@extends('layouts.index')
@section('title')
Dịch Vụ Sửa Xe
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Page_Add.css')}}">
<div class="Background">
    <div class="FormTuyenTho">
        <div class="headertuyentho">Sửa Thông Tin Nhân Viên</div>
        <form action="{{route('PostEditNhanVien')}}" class="formapply" method="post">
            {{csrf_field()}}
            <input type="number" name="Id" readonly="readonly" value="{{$infor->id}}" class="background-color: gray;"><br>
            <input type="text" name="Name" placeholder="Tên" value="{{$infor->Ten}}"><br>
            <input type="text" name="GioiTinh" placeholder="Giới Tính" value="{{$infor->GioiTinh}}"><br>
            <input type="number" name="NamSinh" placeholder="Năm Sinh" value="{{$infor->NamSinh}}"><br>
            <input type="email" name="Email" placeholder="Email" value="{{$infor->Email}}"><br>
            <input type="phone" name="Phone" placeholder="SĐT" value="{{$infor->SDT}}"><br>
            <input type="text" name="DiaChi" placeholder="Địa chỉ" value="{{$infor->DiaChi}}"><br>
            <input type="text" name="ChungChi" placeholder="Chứng chỉ" value="{{$infor->ChungChi}}"><br>
            <input type="text" name="BangCap" placeholder="Bằng Cấp" value="{{$infor->BangCap}}"><br>
            <input type="number" name="NamKinhNghiem" placeholder="Năm kinh nghiệm" value="{{$infor->NamKinhNghiem}}"><br>
            <textarea type="text" name="MoTa" placeholder="Mô tả về kinh nghiệm của bản thân" value="{{$infor->MoTa}}">{{$infor->MoTa}}</textarea> <br>
            <div>Nhận xét về thợ máy</div>
            <select name="id_phuongtien">
                <option value="{{$infor2->id}}">{{$infor2->id}} - {{$infor2->TenPhuongTien}}</option>
                @foreach($infor1 as $tl)
                  <option value="{{$tl->id}}">{{$tl->id}} - {{$tl->TenPhuongTien}}</option>
                @endforeach
            </select><br>
            <select class="Đánh Giá" name="DanhGia">
                <option value="{{$infor->XepLoai}}">{{$infor->XepLoai}}</option>
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="Bad">Bad</option>
            </select><br>     
            <div class="submit"><input type="submit" value ="ADD"></div>
        </form>           
    </div>
</div>

@endsection