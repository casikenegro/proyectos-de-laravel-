<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employe', function (Blueprint $table) {

             $table->foreign('employe_category_id')->references('id')->on('employe_categories')->onDelete('set null');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employe',function(Blueprint $table){
              // Place foreign key name
              $table->dropForeign('employe_category_id');
          });
    }
}
