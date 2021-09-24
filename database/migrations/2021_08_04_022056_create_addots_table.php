<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addots', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name',80);
            $table->string('doctor_email');
            $table->string('operation_name');
            $table->string('Patient_name', 80);
            $table->string('time');
            $table->string('date');
            $table->string('status')->default("Active");
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
        Schema::dropIfExists('addots');
    }
}
