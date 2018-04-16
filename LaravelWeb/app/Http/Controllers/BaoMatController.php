<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaoMatController extends Controller
{
    public function GetBaoMat(){
    	return view('pages.baomat');
    }
}
