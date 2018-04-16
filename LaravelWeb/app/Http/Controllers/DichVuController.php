<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infor;
use App\DichVu;
use App\PhuongTien;
use App\NhanVien;

class DichVuController extends Controller
{
    public function getDichVu(){

        $infor = \DB::table('dichvu')
                    ->join('phuongtien', 'dichvu.id_phuongtien', '=', 'phuongtien.id')
                    ->select('dichvu.id', 'dichvu.TenDichVu', 'dichvu.Gia', 'phuongtien.TenPhuongTien')
                    ->get();

        return view('pages.DichVu.Page_InforDichVu',['infor'=>$infor]);
    }

    public function EditDichVu($id_dichvu){
        $infor = DichVu::find($id_dichvu);
        $infor1 = PhuongTien::find($infor->id_phuongtien);
        return view('pages.DichVu.Page_EditDichVu',['infor'=>$infor,'infor1'=>$infor1]);
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
        return view('pages.DichVu.Page_AddDichVu',['id'=>$id,'infor1'=>$infor1]);
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
