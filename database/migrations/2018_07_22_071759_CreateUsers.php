<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_user');
            $table->string('username')->unique();
            $table->string('password');

            $table->integer('id_role')->unsigned();

            $table->integer('id_student')->unsigned();

            $table->integer('id_lecturer')->unsigned();
            
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',function(Blueprint $table){
            $table->foreign('id_role')
            ->references('id_role')
            ->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_student')
            ->references('id_student')
            ->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_lecturer')
            ->references('id_lecturer')
            ->on('lecturers')
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
        Schema::dropIfExists('users');
    }
}
