<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// use App\NhanVien;
// Route::get('thu',function(){
// 	$nhanvien=NhanVien::find(1);
// 	foreach ($nhanvien->phuongtien as $phuongtien) {
// 		echo "$phuongtien->TenPhuongTien<br>";
// 	}
// });
// //ok
// use App\PhuongTien;
// Route::get('thuketnoi',function(){
// 	$phuongtien=PhuongTien::find(3);
// 	foreach ($phuongtien->dichvu as $dichvu) {
// 		echo "$dichvu->TenDichVu<br>";
// 	}
// });
// use App\DichVu;
// Route::get('thuketnoi2',function(){
// 	$nhanvien=NhanVien::find(1);
// 	foreach ($nhanvien->dichvu as $dichvu) {
// 		echo "$dichvu->TenDichVu<br>";
// 	}
// });
// Route::get('thuketnoi3',function(){
// 	$phuongtien=PhuongTien::find(1);
// 	foreach ($phuongtien->nhanvien as $nhanvien) {
// 		echo "$nhanvien->Ten<br>";
		
// 	}
// });
use App\TuyenDung;
Route::get('danhsach',function(){
	$danhsach=TuyenDung::all();
	echo "$danhsach";
});
//lấy thông tin tuyển thợ
Route::get('getFormTuyenTho',['as'=>'getFormTuyenTho','uses'=>'MyController@getFormTuyenTho']);
Route::post('postFormTuyenTho',['as'=>'postFormTuyenTho','uses'=>'MyController@postFormTuyenTho']);
Route::get('thongbaodangki',function(){
	return view('users.pages.trangchu');
});