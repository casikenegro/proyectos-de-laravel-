<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeign1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extension_medicamentos', function (Blueprint $table) {
          $table->foreign('farmacias_id')
                   ->references('id')->on('farmacias');
                   $table->foreign('medicamentos_id')
                            ->references('id')->on('medicamentos');
        });
        Schema::table('empleados', function (Blueprint $table) {
          $table->foreign('cargo_id')
                   ->references('id')->on('cargos_empleados');
                   $table->foreign('farmacias_id')
                            ->references('id')->on('farmacias');

        });
        Schema::table('medicamentos', function (Blueprint $table) {
          $table->foreign('laboratorios_id')
                   ->references('id')->on('laboratorios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('extension_medicamentos', function (Blueprint $table) {
               $table->dropForeign('farmacias_id');
               $table->dropForeign('medicamentos_id');
           });
           Schema::table('empleados', function (Blueprint $table) {
             $table->dropForeign('cargo_id');
             $table->dropForeign('farmacias_id');
                });
                Schema::table('medicos', function (Blueprint $table) {
                  $table->dropForeign('laboratorios_id');

                     });

            }
}
