<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tblevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblevent', function (Blueprint $table) {
    $table->increments('id')->autoIncrement();
    $table->string('idevent')->unique();
    $table->string('namaevent');
    $table->string('iduser');
    $table->datetime('jamdari');
    $table->datetime('jamsampai');
    $table->datetime('tanggaldari');
    $table->datetime('tanggalsampai');
    $table->binary('dokument')->nullable();
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
      Schema::dropIfExists('tblevent');
    }
}
