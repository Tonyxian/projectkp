<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbllevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbllevel', function (Blueprint $table) {
            $table->string('idlevel')->unique();
           $table->string('namalevel');
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
        Schema::dropIfExists('tbllevel');
    }
}
