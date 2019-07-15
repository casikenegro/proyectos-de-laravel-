<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlCuenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cuenta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('fecha',40);
            $table->unsignedInteger('farmacias_id');
            $table->unsignedInteger('compras_id');
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
        Schema::dropIfExists('control_cuenta');
    }
}
