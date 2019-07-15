<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAppointmentExams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_exams', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedInteger('users_id');
          $table->unsignedInteger('doctor_id');
          $table->unsignedInteger('employe_id');
          $table->timestamp('date_query');
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
        Schema::dropIfExists('appointment_exams');
    }
}
