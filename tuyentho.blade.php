@extends('layoutss.index')
@section('title')
Tuyentho
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/tuyentho.css')}}">
<div class="Background">
	<div class="FormTuyenTho">
		<div class="headertuyentho">ÁP DỤNG CHO KHÁCH HÀNG MUỐN APPLY VÀO TRUNG TÂM</div>
		<p>Vui lòng cung cấp cho chúng tôi một vài thông tin cơ bản về bạn để chúng tôi có tể liên hệ!</p>
		<form class="formapply">
			<input type="text" name="Ten" placeholder="Ten"><br>
			<input type="text" name="Email" placeholder="Email"><br>
			<input type="text" name="SĐT" placeholder="SĐT"><br>
			<input type="text" name="DiaChi" placeholder="Địa chỉ"><br>
			<input type="text" name="NamKinhNghiem" placeholder="Năm kinh nghiệm"><br>
			<textarea type="text" name="NoiDung" placeholder="Một số thông tin khác về bản thân bạn và kinh nghiệm của bạn."></textarea> <br>
			<div>Bạn đã nghe về chúng tôi ở đâu?</div>
			<select class="O_Dau">
				<option value="Bao">Báo</option>
				<option value="Google">Google</option>
				<option value="Radio">Radio</option>
				<option value="NTD">Nhà tuyển dụng</option>
				<option value="Facebook">Facebook</option>
				<option value="BanBe">Bạn bè/ Gia đình</option>
				<option value="Khac">Khác</option>
			</select><br>
			<div class="submit"><input type="submit" value ="GỬI!"></div>
		</form>
			
	</div>
</div>

@endsection