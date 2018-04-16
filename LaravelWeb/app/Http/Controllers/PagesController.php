<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use View;
class PagesController extends Controller
{
    function __construct(){        
        View::share('login_user',Auth::user());
    }
     public function trogiup(){
        return view('pages/trogiup');
    }  
    public function index()
    {
        return view('pages/index');
    }
   
}

