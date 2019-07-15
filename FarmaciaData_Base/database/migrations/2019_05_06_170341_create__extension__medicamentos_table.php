<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_medicamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('existencia');
            $table->unsignedInteger('farmacias_id');
            $table->unsignedInteger('medicamentos_id');
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
        Schema::dropIfExists('extension_medicamentos');
    }
}
