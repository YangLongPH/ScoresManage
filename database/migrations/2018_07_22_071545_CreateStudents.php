<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('id_student');
            $table->integer('mssv');

            $table->string('fullname');
            $table->string('address');
            $table->string('birthday');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('hobby');
            $table->string('major');

            $table->bigInteger('id_classcourse')->unsigned();
            
            $table->integer('id_typeeducate')->unsigned();
            
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('students',function(Blueprint $table){
            $table->foreign('id_classcourse')
            ->references('id_classcourse')
            ->on('classcourses')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_typeeducate')
            ->references('id_typeeducate')
            ->on('typeeducates')
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
        Schema::dropIfExists('students');
    }
}
