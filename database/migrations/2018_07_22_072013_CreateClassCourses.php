<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classcourses', function (Blueprint $table) {
            $table->bigIncrements('id_classcourse');
            $table->string('codecourse');
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
        Schema::dropIfExists('classcourses');
    }
}
