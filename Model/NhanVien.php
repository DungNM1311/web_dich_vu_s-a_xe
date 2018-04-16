<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    //
     protected $table="nhanvien";
    public function phuongtien()
    {
    	return $this->belongsTo('App\PhuongTien','id_nhanvien','id');
    }
    
}
