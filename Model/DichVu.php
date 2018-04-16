<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    //
    protected $table="dichvu";
     public function phuongtien()
     {
     	return $this->belongsTo('App\PhuongTien','id_phuongtien','id');
     }
}
