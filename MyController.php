<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infor;
use App\DichVu;
use App\PhuongTien;
use App\TuyenDung;
class MyController extends Controller
{
    public function insertThoMay(Request $request){

    	$infor = new Infor;

    	$infor->Ten = $request->Name;
    	$infor->Email = $request->Email;
    	$infor->Phone = $request->Phone;
    	$infor->DiaChi = $request->DiaChi;
    	$infor->ChungChi = $request->ChungChi;
    	$infor->BangCap = $request->BangCap;
    	$infor->NamKinhNghiem = $request->NamKinhNghiem;
    	$infor->MoTa = $request->MoTa;
    	$infor->XepLoai = $request->DanhGia;

    	$infor->save();

    	return redirect()->route('Infor');
    }

    public function getInfor(){

    	$infor = Infor::all();
    	return view('admin.nhanvien.Page_Infor',['infor'=>$infor]);
    }

    public function getRepairInfor($id_thomay){
    	$infor = Infor::find($id_thomay);
    	return view('admin.nhanvien.Page_Repair',['infor'=>$infor]);
    }

    public function postRepairInfor(Request $request){
    	$infor = Infor::find($request->Id);

    	$infor->Ten = $request->Name;
    	$infor->Email = $request->Email;
    	$infor->Phone = $request->Phone;
    	$infor->DiaChi = $request->DiaChi;
    	$infor->ChungChi = $request->ChungChi;
    	$infor->BangCap = $request->BangCap;
    	$infor->NamKinhNghiem = $request->NamKinhNghiem;
    	$infor->MoTa = $request->MoTa;
    	$infor->DanhGia = $request->DanhGia;

    	$infor->save();

    	return redirect()->route('RepairInfor');
    }

    public function Delete_Infof_NV($id_thomay){
    	$id = Infor::find($id_thomay);

    	$id->delete();
    	$infor = Infor::all();

    	return redirect()->route('Infor');
    }

    public function getDichVu(){

        $infor = DichVu::all();


        return view('admin.dichvu.Page_DichVu',['infor'=>$infor]);
    }

    public function EditDichVu($id_dichvu){
        $infor = DichVu::find($id_dichvu);
        return view('admin.dichvu.Page_EditDichVu',['infor'=>$infor]);
    }

    public function PostEditDichVu(Request $request){
        $infor = DichVu::find($request->id);

        $infor->TenDichVu = $request->tendichvu;
        $infor->LoaiXe = $request->loaixe;
        $infor->Gia = $request->gia;

        $infor->save();

        return redirect()->route('DichVu');
    }

    public function DeleteDichVu($id_dichvu){
        $infor = DichVu::find($id_dichvu);

        $infor->delete();

        return redirect()->route('DichVu');
    }

    public function AddDichVu(){
        $infor = DichVu::all();

        $id = sizeof($infor)+1;
        return view('admin.dichvu.Page_AddDichVu',['id'=>$id]);
    }

    public function PostAddDichVu(Request $request){
        $infor = new DichVu;

        $infor->TenDichVu = $request->tendichvu;
        $infor->LoaiXe = $request->loaixe;
        $infor->Gia = $request->gia;

        $infor->save();

        return redirect()->route('DichVu');
    }


public function getFormTuyenTho()
    { 
        return view('pages.tuyentho');
    }
    public function postFormTuyenTho(Request $request)
    {
        $infor = new TuyenDung;

        $infor->Ten = $request->Ten;
        $infor->GioiTinh = $request->GioiTinh;
        $infor->NamSinh = $request->NamSinh;
        $infor->Email = $request->Email;
        $infor->SDT = $request->SDT;
        $infor->DiaChi = $request->DiaChi;
        $infor->ChungChi = $request->ChungChi;
        $infor->BangCap = $request->BangCap;
        
        $infor->NamKinhNghiem = $request->NamKinhNghiem;
        $infor->TenPhuongTien = $request->TenPhuongTien;
        $infor->MoTa = $request->MoTa;
         $infor->Nguon = $request->Nguon;


        $infor->save();

        return view('pages.trangchu');
    }
}