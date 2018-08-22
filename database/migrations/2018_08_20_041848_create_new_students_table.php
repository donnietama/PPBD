<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->double('math', 100, 2);
            $table->double('science', 100, 2);
            $table->double('bahasa', 100, 2);
            $table->double('english', 100, 2);
            $table->text('skhun');
            $table->text('ijazah');
            $table->text('raport');
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
        Schema::dropIfExists('new_students');
    }
}
