<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongTien extends Model
{
    //
    protected $table="phuongtien";
    public function nhanvien()
    {
    	return $this->hasMany('App\NhanVien','id_nhanvien','id');
    }
    public function dichvu()
    {
    	return $this->hasMany('App\DichVu','id_phuongtien','id');
    }
}
