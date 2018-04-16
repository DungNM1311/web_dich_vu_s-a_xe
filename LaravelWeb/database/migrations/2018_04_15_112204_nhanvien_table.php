 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nhanvien', function ($table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('GioiTinh');
            $table->Date('NamSinh');
            $table->string('SDT');
            $table->string('DiaChi');
            $table->string('Email',191)->unique();
            $table->string('NamKinhNghiem');
            $table->string('ChungChi');
            $table->string('BangCap');
            $table->string('MoTa',6000);
            $table->string('Anh');
            $table->string('XepLoai');
            $table->integer('id_phuongtien');
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('nhanvien');
    }
}
