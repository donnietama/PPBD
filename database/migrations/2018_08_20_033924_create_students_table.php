<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('name');
            $table->date('birth');
            $table->string('city');
            $table->string('province');
            $table->bigInteger('contact')->unique();
            $table->bigInteger('emergenc')->unique();
            $table->string('emergenrel');
            $table->text('avatar')->nullable();
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
