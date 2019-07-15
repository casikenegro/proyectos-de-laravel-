<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFereing2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('compras', function (Blueprint $table) {
                   $table->foreign('medicamentos_id')
                            ->references('id')->on('medicamentos');
                            $table->foreign('pedido_id')
                            ->references('id')->on('pedidos');
                            $table->foreign('farmacias_id')
                                     ->references('id')->on('farmacias');
        });
        Schema::table('pedidos', function (Blueprint $table) {
          $table->foreign('laboratorios_id')
          ->references('id')->on('laboratorios');
                   $table->foreign('farmacias_id')
                            ->references('id')->on('farmacias');
        });
        Schema::table('control_cuenta', function (Blueprint $table) {
          $table->foreign('farmacias_id')
          ->references('id')->on('farmacias');
          $table->foreign('compras_id')
          ->references('id')->on('compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

           Schema::table('compras', function (Blueprint $table) {
                    $table->dropForeign('medicamentos_id');
                    $table->dropForeign('pedido_id');
                      $table->dropForeign('farmacias_id');
                });
                     Schema::table('pedidos', function (Blueprint $table) {
                              $table->dropForeign('laboratorios_id');
                              $table->dropForeign('farmacias_id');
                          });
                          Schema::table('control_cuenta', function (Blueprint $table) {
                                   $table->dropForeign('farmacias_id');
                                   $table->dropForeign('compras_id');
                               });
    }
}
