@extends('layouts.index')
@section('title')
Dịch Vụ Sửa Xe
@endsection
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/Page_Infor.css')}}">
<div class="Background">
	@foreach($infor as $tl)
		<div class="FormThongTin">
			<div class="ViewImage">
				<div class="Image">
					<img src="image\{{$tl->Anh}}" width="100px" height= "200px" no-repeat>
				</div>
				<div class="Rank">
					<font style="vertical-align: inherit;">Nhận Xét :</font>
	        		<font style="vertical-align: inherit;">{{$tl->XepLoai}}</font>
				</div>
				<div>
					<button onclick="window.location='{{route('AddNhanVien')}}'" ><img src="image\add.png" width="30px" height= "30px" no-repeat ></button>	
					<button onclick="window.location='{{ url("NhanVien/EditNhanVien/$tl->id") }}'" ><img src="image\repair.png" width="30px" height= "30px" no-repeat ></button>
					<button onclick="ConfirmDelete()"><img src="image\delete.png" width="30px" height= "30px" no-repeat></button>			
				</div>				
			</div>			
			<div class="Infor">
				<h1>
					<font style="vertical-align: inherit;">
					<font  style="vertical-align: inherit;">{{$tl->Ten}}</font>
					</font>
				</h1>
				<ul>
					<li>{{$tl->ChungChi}}</li>
					<li>{{$tl->BangCap}}</li>
				</ul>
				<p>{{$tl->MoTa}}</p>
			</div>		
		</div>
		<script>
			function ConfirmDelete()
			{
			  var x = confirm("Are you sure you want to delete?");
			  if (x)
			  {
			  	window.location.href = "{{ url("NhanVien/DeleteInfor/$tl->id") }}";
			  	return true;

			  }			    
			  else
			    return false;
			}
		</script>		
	@endforeach


</div>

@endsection