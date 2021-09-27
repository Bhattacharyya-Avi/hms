<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmitpatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitpatients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name',80);
            $table->string('patient_age');
            $table->foreignId('doctor_id')->references('id')->on('users');
            $table->string('patient_email')->nullable();
            $table->integer('patient_phone');
            $table->string('patient_address');
            $table->string('bed_type');
            $table->foreignId('bed_number')->references('id')->on('beds');
            $table->string('services')->nullable();
            $table->string('admission_date');
            $table->string('release_date')->nullable();
            $table->string('admission_time');
            $table->string('status')->default('Admitted');
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
        Schema::dropIfExists('admitpatients');
    }
}
