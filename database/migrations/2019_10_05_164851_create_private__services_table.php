<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private__services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_type_service');
            $table->integer('number_floors');
            $table->integer('acreage');
            $table->string('standard');
            $table->string('Free service');
            $table->string('note');
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
        Schema::dropIfExists('private__services');
    }
}
