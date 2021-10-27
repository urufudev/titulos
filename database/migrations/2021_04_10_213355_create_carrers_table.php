<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('institute_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');
            $table->timestamps();


            $table->foreign('institute_id')->references('id')->on('institutes')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrers');
    }
}
