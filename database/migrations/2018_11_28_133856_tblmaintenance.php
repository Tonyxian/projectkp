<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tblmaintenance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblmaintenance', function (Blueprint $table) {
    $table->increments('id')->autoIncrement();
    $table->string('idmaintenance')->unique();
    $table->string('namamaintenance');
    $table->string('keterangan');
    $table->datetime('tanggalmaintenace');
    $table->datetime('tanggalselesai');
    $table->string('idruangan');
    $table->string('created_by')->nullable();
    $table->string('updated_by')->nullable();
    $table->timestamps();
    $table->string('statusid');
       });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tblmaintenance');
    }
}
