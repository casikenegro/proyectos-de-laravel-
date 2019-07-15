<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeinkeyEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('appointments', function (Blueprint $table) {

             $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
         });

    Schema::table('appointments', function (Blueprint $table) {

           $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
       });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('appointments',function(Blueprint $table){
      // Place foreign key name
      $table->dropForeign('users_id');
  });
  Schema::table('appointments',function(Blueprint $table){
  // Place foreign key name
  $table->dropForeign('doctor_id');
});
    }
}
