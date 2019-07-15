<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name',40);
          $table->string('surname',40);
          $table->integer('cedula')->unique();
          $table->unsignedInteger('employe_category_id');
          $table->integer('Phone');
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
        Schema::dropIfExists('employe');
    }
}
