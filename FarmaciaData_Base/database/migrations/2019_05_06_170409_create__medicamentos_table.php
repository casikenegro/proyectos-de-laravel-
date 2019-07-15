<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',40);
            $table->string('monodroga',40);
            $table->string('presentacion',40);
            $table->string('accion_terapeutica',40);
            $table->integer('precio');
            $table->string('principal_componente',40);
            $table->unsignedInteger('laboratorios_id');

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
        Schema::dropIfExists('medicamentos');
    }
}
