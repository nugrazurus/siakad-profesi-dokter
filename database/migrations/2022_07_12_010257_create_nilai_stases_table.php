<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiStasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_stases', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('idjadwal');
            $table->string('nilai_huruf', 2);
            $table->float('nilai_angka')->nullable();
            $table->string('store_by');
            $table->boolean('published')->default(0);
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
        Schema::dropIfExists('nilai_stases');
    }
}
