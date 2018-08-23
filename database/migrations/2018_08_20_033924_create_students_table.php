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
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->bigInteger('contact')->nullable();
            $table->bigInteger('emergenc_contact')->nullable();
            $table->bigInteger('emergenc_contact_relation')->nullable();
            $table->double('math_scores', 100, 2)->nullable();
            $table->double('science_scores', 100, 2)->nullable();
            $table->double('literature_scores', 100, 2)->nullable();
            $table->text('certificate_exam_url')->nullable();
            $table->text('certificate_qualification_url')->nullable();
            $table->text('avatar')->nullable();
            $table->boolean('complete_data')->default(false);
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
