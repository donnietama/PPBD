<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('predicate');
            $table->string('status');
            $table->integer('capacity');
            $table->integer('1st_grade_cap')->nullable();
            $table->integer('2nd_grade_cap')->nullable();
            $table->integer('3rd_grade_cap')->nullable();
            $table->integer('4th_grade_cap')->nullable();
            $table->integer('5th_grade_cap')->nullable();
            $table->integer('6th_grade_cap')->nullable();
            $table->boolean('open_regist')->default(false);
            $table->date('regist_begin')->nullable();
            $table->date('regist_ended')->nullable();
            $table->text('address');
            $table->integer('years_of_construction');
            $table->string('email')->unique();
            $table->bigInteger('contact');
            $table->bigInteger('emergency_contact');
            $table->text('preview_url');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
