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
Route::get('trangchu',function(){
	return view('pages.trangchu');
});

Route::group(['prefix'=>'NhanVien'],function(){
	Route::get('InforNhanVien',['as'=>'Infor','uses'=>'NhanVienController@getInfor']);

	Route::get('AddNhanVien',['as'=>'AddNhanVien','uses'=>'NhanVienController@AddNhanVien']);

	Route::post('PostAddNhanVien',['as'=>'Add','uses'=>'NhanVienController@PostAddNhanVien']);

	Route::get('EditNhanVien/{id_thomay}',['as'=>'RepairInfor','uses'=>'NhanVienController@EditNhanVien']);

	Route::post('PostEditNhanVien',['as'=>'postRepair','uses'=>'NhanVienController@PostEditNhanVien']);

	Route::get('DeleteInfor/{id_thomay}',['as'=>'DeleteInfor','uses'=>'NhanVienController@Delete_Infof_NV']);	
});

Route::group(['prefix'=>'DichVu'],function(){
	Route::get('InforDichVu',['as'=>'DichVu','uses'=>'DichVuController@getDichVu']);

	Route::get('EditDichVu/{id_dichvu}',['as'=>'EditDichVu','uses'=>'DichVuController@EditDichVu']);

	Route::post('EditDichVu/Post',['as'=>'PostEditDichVu','uses'=>'DichVuController@PostEditDichVu']);

	Route::get('DeleteDichVu/{id_dichvu}',['as'=>'DeleteDichVu','uses'=>'DichVuController@DeleteDichVu']);

	Route::get('AddDichVu',['as'=>'AddDichVu','uses'=>'DichVuController@AddDichVu']);

	Route::post('PostAddDichVu',['as'=>'PostAddDichVu','uses'=>'DichVuController@PostAddDichVu']);	
});
Route::get('BaoMat',function(){
	return view('pages.baomat');
});

Route::get('DieuKhoan',function(){
	return view('pages.dieukhoan');
});
Route::get('tuyentho',function(){
	return view('pages.tuyentho');
});