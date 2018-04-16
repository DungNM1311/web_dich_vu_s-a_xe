@extends('layouts.index')
@section('title')
Dịch Vụ Sửa Xe
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Page_Add.css')}}">
<div class="Background">
    <div class="FormTuyenTho">
        <div class="headertuyentho">THÔNG TIN THỢ MÁY</div>
        <form action="{!! route('Add')!!}" class="formapply" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="Name" placeholder="Tên"><br>
            <input type="text" name="GioiTinh" placeholder="Giới Tính"><br>
            <input type="number" name="NamSinh" placeholder="Năm Sinh"><br>
            <input type="email" name="Email" placeholder="Email"><br>
            <input type="phone" name="Phone" placeholder="SĐT"><br>
            <input type="text" name="DiaChi" placeholder="Địa chỉ"><br>
            <input type="text" name="ChungChi" placeholder="Chứng chỉ"><br>
            <input type="text" name="BangCap" placeholder="Bằng Cấp"><br>
            <input type="number" name="NamKinhNghiem" placeholder="Năm kinh nghiệm"><br>
            <textarea type="text" name="MoTa" placeholder="Mô tả về kinh nghiệm của bản thân"></textarea> <br>
            <input type="file" name="Image" placeholder="Ảnh"><br>
            <div>Nhận xét về thợ máy</div>
            <select class="Đánh Giá" name="DanhGia">
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="Bad">Bad</option>
            </select><br>
            <select name="id_phuongtien">
                @foreach($infor as $tl)
                  <option value="{{$tl->id}}">{{$tl->id}} - {{$tl->TenPhuongTien}}</option>
                @endforeach
            </select><br>         
            <div class="submit"><input type="submit" value ="ADD"></div>
        </form>           
    </div>
</div>

@endsection