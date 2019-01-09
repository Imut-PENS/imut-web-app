<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_imunisasis_id')->unsigned();
            $table->foreign('jenis_imunisasis_id')->references('id')->on('jenis_imunisasis')->onDelete('cascade');
            $table->string('jumlah_imunisasi');
            $table->string('waktu_imunisasi');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imunisasis');
    }
}
