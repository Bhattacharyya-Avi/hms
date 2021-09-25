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
            $table->string('doctor_name');
            $table->string('patient_email')->nullable();
            $table->integer('patient_phone');
            $table->string('patient_address');
            $table->string('bed_type');
            $table->string('bed_number');
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
