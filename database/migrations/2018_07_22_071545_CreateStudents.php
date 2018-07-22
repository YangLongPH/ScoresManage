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
            $table->integer('mssv')->primary();
            $table->string('fullname');
            $table->string('address');
            $table->string('birthday');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('hobby');
            $table->string('major');
            $table->string('class');
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
        Schema::dropIfExists('students');
    }
}
