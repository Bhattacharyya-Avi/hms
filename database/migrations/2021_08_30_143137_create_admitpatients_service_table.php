<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmitpatientsServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitpatients_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admitpatients_id')->unsigned();
            $table->foreign('admitpatients_id')->references('id')->on('admitpatients');
            $table->unsignedBigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('admitpatients_service');
    }
}
