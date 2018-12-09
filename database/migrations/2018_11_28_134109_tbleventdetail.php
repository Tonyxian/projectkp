<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbleventdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbleventdetail', function (Blueprint $table) {
    $table->increments('id')->autoIncrement();
    $table->string('ideventdetail')->unique();
    $table->string('idruangan');
    $table->string('idmaintenance');
    $table->string('idevent');
    $table->string('keterangan');
    $table->string('created_by')->nullable();
    $table->string('updated_by')->nullable();
    $table->timestamps();
    $table->string('statusid');
    
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tbleventdetail');
    }
}
