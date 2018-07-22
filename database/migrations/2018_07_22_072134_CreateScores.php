<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_scores');
            $table->integer('scores40');
            $table->integer('scores60');
            $table->integer('scores100');

            $table->bigInteger('id_classsubject')->unsigned();

            $table->Integer('id_student')->unsigned();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('scores',function(Blueprint $table){
            $table->foreign('id_classsubject')
            ->references('id_classsubject')
            ->on('classsubjects')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_student')
            ->references('id_student')
            ->on('students')
            ->onDelete('cascade')
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
        Schema::dropIfExists('scores');
    }
}
