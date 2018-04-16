@extends('templates/master')
@section('title')
Tuyentho
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/tuyentho.css')}}">
<div class="Background">
	<div class="FormTuyenTho">
		<div class="headertuyentho">ÁP DỤNG CHO KHÁCH HÀNG MUỐN APPLY VÀO TRUNG TÂM</div>
		<p>Vui lòng cung cấp cho chúng tôi một vài thông tin cơ bản về bạn để chúng tôi có tể liên hệ!</p>
		<form action="{!!route('postShowFormTuyenTho')!!}" class="formapply" method="post">
			
			<input type="text" name="Ten" placeholder="Ten"><br>
			<input type="text" name="GioiTinh" placeholder="GioiTinh"><br>
			<input type="text" name="NamSinh" placeholder="Năm sinh"><br>
			<input type="text" name="Email" placeholder="Email"><br>
			<input type="text" name="SDT" placeholder="SĐT"><br>
			<input type="text" name="DiaChi" placeholder="Địa chỉ"><br>
			<input type="text" name="ChungChi" placeholder="Chứng chỉ"><br>
            <input type="text" name="BangCap" placeholder="Bằng Cấp"><br>
			<input type="text" name="NamKinhNghiem" placeholder="Năm kinh nghiệm"><br>
			<input type="text" name="TenPhuongTien" placeholder="Tên Phương Tiện"><br>
			<textarea type="text" name="MoTa" placeholder="Một số thông tin khác về bản thân bạn và kinh nghiệm của bạn."></textarea> <br>
			<div>Bạn đã nghe về chúng tôi ở đâu?</div>
			<select class="O_Dau" name="Nguon">
				<option value="Bao">Báo</option>
				<option value="Google">Google</option>
				<option value="Radio">Radio</option>
				<option value="NTD">Nhà tuyển dụng</option>
				<option value="Facebook">Facebook</option>
				<option value="BanBe">Bạn bè/ Gia đình</option>
				<option value="Khac">Khác</option>
			</select><br>
			<div class="submit"><input type="submit" value ="GỬI!"></div>
			{{csrf_field()}}
		</form>
			
	</div>
</div>

@endsection

      