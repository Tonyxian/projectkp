<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbluser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbluser', function (Blueprint $table) {
    $table->increments('id')->autoIncrement();
    $table->string('npm')->unique();
    $table->string('namauser');
    $table->string('password');
    $table->string('idbiro')->nullable();
    $table->string('jabatan')->nullable();
    $table->string('created_by')->nullable();
    $table->string('updated_by')->nullable();
    $table->timestamps();
    $table->string('statusid');
    $table->string('idlevel');
  });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tbluser');
    }
}
