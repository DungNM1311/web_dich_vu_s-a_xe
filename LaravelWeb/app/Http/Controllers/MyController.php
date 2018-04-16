<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infor;
use App\DichVu;
use App\PhuongTien;
use App\NhanVien;

class MyController extends Controller
{

    public function AddNhanVien(){
        $infor = PhuongTien::all();

        return view('pages.Page_AddNhanVien',['infor'=>$infor]);
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

    public function getInfor(){

    	$infor = NhanVien::all();
    	return view('pages.Page_Infor',['infor'=>$infor]);
    }

    public function EditNhanVien($id_thomay){
    	$infor = NhanVien::find($id_thomay);
        $infor1 = PhuongTien::all();
        $infor2 = PhuongTien::find($infor->id_phuongtien);
    	return view('pages.Page_EditNhanVien',['infor'=>$infor, 'infor1'=>$infor1, 'infor2'=>$infor2]);
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

    public function getDichVu(){

        $infor = \DB::table('dichvu')
                    ->join('phuongtien', 'dichvu.id_phuongtien', '=', 'phuongtien.id')
                    ->select('dichvu.id', 'dichvu.TenDichVu', 'dichvu.Gia', 'phuongtien.TenPhuongTien')
                    ->get();

        // var_dump($infor);

        // foreach ($infor as $tl) {
        //     echo $tl->TenPhuongTien;
        // }

        return view('pages.Page_DichVu',['infor'=>$infor]);
    }

    public function EditDichVu($id_dichvu){
        $infor = DichVu::find($id_dichvu);
        $infor1 = PhuongTien::find($infor->id_phuongtien);
        return view('pages.Page_EditDichVu',['infor'=>$infor,'infor1'=>$infor1]);
    }

    public function PostEditDichVu(Request $request){
        $infor = DichVu::find($request->id);

        $infor->TenDichVu = $request->tendichvu;
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
        $infor1 = PhuongTien::all();

        $id = sizeof($infor)+1;
        return view('pages.Page_AddDichVu',['id'=>$id,'infor1'=>$infor1]);
    }

    public function PostAddDichVu(Request $request){
        $infor = new DichVu;

        $infor->TenDichVu = $request->tendichvu;
        $infor->id_phuongtien = $request->id_phuongtien;
        $infor->Gia = $request->gia;

        $infor->save();

        return redirect()->route('DichVu');
    }
}
