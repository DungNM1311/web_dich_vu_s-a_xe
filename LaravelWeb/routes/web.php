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
//Nguyễn MInh Dũng

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu',function(){
	return view('pages.trangchu');
})->name('trangchu');

Route::get('Infor',['as'=>'NhanVien','uses'=>'NhanVienController@getInfor']);

Route::get('ShowInforNhanVien',['as'=>'ShowInforNhanVien','uses'=>'NhanVienController@ShowInforNhanVien']);

Route::group(['prefix'=>'NhanVien'],function(){
	// Route::get('InforNhanVien',['as'=>'NhanVien','uses'=>'NhanVienController@getInfor']);

	Route::get('AddNhanVien',['as'=>'AddNhanVien','uses'=>'NhanVienController@AddNhanVien']);

	Route::post('PostAddNhanVien',['as'=>'Add','uses'=>'NhanVienController@PostAddNhanVien']);

	Route::get('EditNhanVien/{id_thomay}',['as'=>'EditNhanVien','uses'=>'NhanVienController@EditNhanVien']);

	Route::post('PostEditNhanVien',['as'=>'PostEditNhanVien','uses'=>'NhanVienController@PostEditNhanVien']);

	Route::get('DeleteInfor/{id_thomay}',['as'=>'DeleteInfor','uses'=>'NhanVienController@Delete_Infof_NV']);	
});

//Nguyễn Thị Thiết

Route::group(['prefix'=>'DichVu'],function(){

	Route::get('ShowInforDichVu',['as'=>'ShowInforDichVu','uses'=>'DichVuController@ShowInforDichVu']);

	Route::get('InforDichVu',['as'=>'DichVu','uses'=>'DichVuController@getDichVu']);

	Route::get('EditDichVu/{id_dichvu}',['as'=>'EditDichVu','uses'=>'DichVuController@EditDichVu']);

	Route::post('EditDichVu/Post',['as'=>'PostEditDichVu','uses'=>'DichVuController@PostEditDichVu']);

	Route::get('DeleteDichVu/{id_dichvu}',['as'=>'DeleteDichVu','uses'=>'DichVuController@DeleteDichVu']);

	Route::get('AddDichVu',['as'=>'AddDichVu','uses'=>'DichVuController@AddDichVu']);

	Route::post('PostAddDichVu',['as'=>'PostAddDichVu','uses'=>'DichVuController@PostAddDichVu']);	
});

Route::get('ChinhSachBaoMat',['as'=>'ChinhSachBaoMat','uses'=>'BaoMatController@GetBaoMat']);

Route::get('DieuKhoanDichVu',['as'=>'DieuKhoanDichVu','uses'=>'DieuKhoanController@GetDieuKhoan']);

//Giáp Thị Lý

use App\TuyenDung;
Route::get('danhsach',function(){
	$danhsach=TuyenDung::all();
	echo "$danhsach";
});

//lấy thông tin tuyển thợ
Route::get('getFormTuyenTho',['as'=>'getFormTuyenTho','uses'=>'TuyenThoController@getFormTuyenTho']);

Route::post('postFormTuyenTho',['as'=>'postFormTuyenTho','uses'=>'TuyenThoController@postFormTuyenTho']);

Route::get('getShowFormTuyenTho',['as'=>'getShowFormTuyenTho','uses'=>'TuyenThoController@getShowFormTuyenTho']);

Route::post('postShowFormTuyenTho',['as'=>'postShowFormTuyenTho','uses'=>'TuyenThoController@postShowFormTuyenTho']);

//Trần Hải Đăng

Route::get('trogiup',['as'=>'TroGiup','uses'=>'TroGiupController@GetTroGiup']);


Route::get('/','PagesController@index')->name('main');
Auth::routes();
Route::get('/home', 'PagesController@index')->name('home');


// Route::get('thongbaodangki',function(){
// 	return view('pages.trangchu');
// });

// Route::get('AddNhanVien',['as'=>'AddNhanVien','uses'=>'NhanVienController@AddNhanVien']);

// Route::post('PostAddNhanVien',['as'=>'Add','uses'=>'NhanVienController@PostAddNhanVien']);

// Route::get('EditNhanVien/{id_thomay}',['as'=>'RepairInfor','uses'=>'NhanVienController@EditNhanVien']);

// Route::post('PostEditNhanVien',['as'=>'postRepair','uses'=>'NhanVienController@PostEditNhanVien']);

// Route::get('DeleteInfor/{id_thomay}',['as'=>'DeleteInfor','uses'=>'NhanVienController@Delete_Infof_NV']);

// Route::get("test",function(){
// 	return view('pages.Page_DichVu');
// });

// Route::get('DichVu',['as'=>'DichVu','uses'=>'DichVuController@getDichVu']);

// Route::get('EditDichVu/{id_dichvu}',['as'=>'EditDichVu','uses'=>'DichVuController@EditDichVu']);

// Route::post('EditDichVu/Post',['as'=>'PostEditDichVu','uses'=>'DichVuController@PostEditDichVu']);

// Route::get('DeleteDichVu/{id_dichvu}',['as'=>'DeleteDichVu','uses'=>'DichVuController@DeleteDichVu']);

// Route::get('AddDichVu',['as'=>'AddDichVu','uses'=>'DichVuController@AddDichVu']);

// Route::post('PostAddDichVu',['as'=>'PostAddDichVu','uses'=>'DichVuController@PostAddDichVu']);