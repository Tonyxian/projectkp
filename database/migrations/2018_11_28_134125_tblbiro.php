<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tblbiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblbiro', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('idbiro')->unique();
           $table->string('namabiro');
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
        Schema::dropIfExists('tblbiro');
    }
}
