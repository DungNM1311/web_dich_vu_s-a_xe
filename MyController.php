<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TuyenDung;
class MyController extends Controller
{
    //
     public function getFormTuyenTho()
    {
        return view('users.pages.tuyentho');
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

    	return view('users.pages.trangchu');
    }
}
