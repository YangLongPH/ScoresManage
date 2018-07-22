<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classsubjects', function (Blueprint $table) {
            $table->bigIncrements('id_classsubject');
            $table->string('codesubject');
            $table->string('name');
            $table->string('note');
            $table->integer('id_typeeducate');

            $table->rememberToken();
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
        Schema::dropIfExists('classsubjects');
    }
}
