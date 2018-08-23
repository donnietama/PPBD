<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->bigInteger('working_id');
            $table->date('birthdate');
            $table->string('birthplace');
            $table->date('contract_begin');
            $table->date('contract_expire');
            $table->string('status');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipcode');
            $table->text('bio');
            $table->text('avatar');
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
        Schema::dropIfExists('teachers');
    }
}
