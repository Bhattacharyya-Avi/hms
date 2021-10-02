<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('appointment_id');
//            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->string('user_name');
//            $table->foreign('user_id')->references('id')->on('users');
            $table->string('doctor_name');
//            $table->foreign('doctor_id')->references('id')->on('users');
            $table->string('appointment_time');
//            $table->foreign('appointment_time')->references('id')->on('slots');
            $table->string('appointment_date');
//            $table->unsignedBigInteger('appointment_date');
//            $table->foreign('appointment_date')->references('date')->on('appointments');
            $table->string('payment_status')->default('Due');
            $table->string('appointment status')->default('Active');
            $table->string('total_amount');
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
        Schema::dropIfExists('payments');
    }
}
