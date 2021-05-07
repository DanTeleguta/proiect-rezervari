<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervari', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('tipmasa');
            $table->string('zonamasa');
            $table->string('nume');
            $table->string('numartelefon');
           $table->dateTime("datarezervare");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervari');
    }
}
