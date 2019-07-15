<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('doctor', function (Blueprint $table) {

             $table->foreign('doctor_category_id')->references('id')->on('doctor_categories')->onDelete('set null');
         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('doctor',function(Blueprint $table){
              // Place foreign key name
              $table->dropForeign('doctor_category_id');
          });
    }

  }
