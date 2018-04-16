<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infor;
use App\DichVu;
use App\PhuongTien;
use App\NhanVien;

class NhanVienController extends Controller
{

    public function getInfor(){

        $infor = NhanVien::all();
        return view('pages.NhanVien.Page_InforNhanVien',['infor'=>$infor]);
    }

    public function AddNhanVien(){
        $infor = PhuongTien::all();

        return view('pages.NhanVien.Page_AddNhanVien',['infor'=>$infor]);
    }

    public function PostAddNhanVien(Request $request){

    	$infor = new NhanVien;

        $file = $request->file('Image');
        $filename = $file->getClientOriginalName('Image');
        $file->move('image',$filename);

    	$infor->Ten = $request->Name;
        $infor->GioiTinh = $request->GioiTinh;
        $infor->NamSinh = $request->NamSinh;
    	$infor->Email = $request->Email;
    	$infor->SDT = $request->Phone;
    	$infor->DiaChi = $request->DiaChi;
    	$infor->ChungChi = $request->ChungChi;
    	$infor->BangCap = $request->BangCap;
    	$infor->NamKinhNghiem = $request->NamKinhNghiem;
    	$infor->MoTa = $request->MoTa;
        $infor->Anh = $filename;
    	$infor->XepLoai = $request->DanhGia;
        $infor->id_phuongtien = $request->id_phuongtien;

    	$infor->save();


    	return redirect()->route('Infor');
    }

    public function EditNhanVien($id_thomay){
    	$infor = NhanVien::find($id_thomay);
        $infor1 = PhuongTien::all();
        $infor2 = PhuongTien::find($infor->id_phuongtien);
    	return view('pages.NhanVien.Page_EditNhanVien',['infor'=>$infor, 'infor1'=>$infor1, 'infor2'=>$infor2]);
    }

    public function PostEditNhanVien(Request $request){
    	$infor = NhanVien::find($request->Id);

        $infor->Ten = $request->Name;
        $infor->GioiTinh = $request->GioiTinh;
        $infor->NamSinh = $request->NamSinh;
        $infor->Email = $request->Email;
        $infor->SDT = $request->Phone;
        $infor->DiaChi = $request->DiaChi;
        $infor->ChungChi = $request->ChungChi;
        $infor->BangCap = $request->BangCap;
        $infor->NamKinhNghiem = $request->NamKinhNghiem;
        $infor->MoTa = $request->MoTa;
        $infor->XepLoai = $request->DanhGia;
        $infor->id_phuongtien = $request->id_phuongtien;

    	$infor->save();

    	return redirect()->route('Infor');
    }

    public function Delete_Infof_NV($id_thomay){
    	$id = NhanVien::find($id_thomay);

    	$id->delete();
    	$infor = NhanVien::all();

    	return redirect()->route('Infor');
    }
}
