<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DieuKhoanController extends Controller
{
    public function GetDieuKhoan(){
    	return view('pages.dieukhoan');
    }
}
