<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = "dichvu";
    public $timestamps = false;

    public function lienket(){
    	// return $this->belongsTo('App\PhuongTien','id_phuongtien','id');
    	return $this->hasMany('App\PhuongTien','id','id_phuongtien');
    }
}
