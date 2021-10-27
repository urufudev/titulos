<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('institute_id')->unsigned()->nullable();
            $table->bigInteger('carrer_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->enum('document_type',['DNI','CE'])->default('DNI');
            $table->integer('document_number');
            $table->integer('title_number');
            $table->string('title_name');
            $table->enum('title_level',['TECNICO','PROFESIONAL TECNICO','PROFESIONAL','INICIAL','PRIMARIA','SECUNDARIA']);
            $table->date('title_date');
            $table->string('title_code')->nullable();
            $table->string('title_regnumber')->nullable();
            $table->string('title_resnumber')->nullable();
            $table->date('title_regdate')->nullable();
            $table->string('title_regbook')->nullable();
            $table->integer('title_folio')->nullable();
            $table->string('ins_director')->nullable();
            $table->string('ins_secretary')->nullable();
            $table->string('dre_secretary')->nullable();
            $table->string('dre_certificate')->nullable();
            $table->string('title_pdf')->nullable();


            $table->timestamps();

            $table->foreign('institute_id')->references('id')->on('institutes')
                ->onUpdate('cascade');
            $table->foreign('carrer_id')->references('id')->on('carrers')
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
        Schema::dropIfExists('students');
    }
}
