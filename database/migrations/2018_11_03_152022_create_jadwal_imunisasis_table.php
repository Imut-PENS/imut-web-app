<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_imunisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_imunisasis_id')->unsigned();
            $table->foreign('jenis_imunisasis_id')->references('id')->on('jenis_imunisasis')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('jadwal_imunisasis');
    }
}
