<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('school_id')->nullable();
            $table->bigInteger('civilian_id')->nullable();
            $table->bigInteger('family_id')->nullable();
            $table->bigInteger('ownership_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('zipcode')->nullable();
            $table->bigInteger('contact')->nullable();
            $table->bigInteger('emergency_contact')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
