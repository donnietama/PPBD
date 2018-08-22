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
            $table->string('name');
            $table->integer('owner_id');
            $table->string('city');
            $table->string('region');
            $table->string('address');
            $table->string('postal');
            $table->integer('plan_id');
            $table->string('email')->nulable();
            $table->bigInteger('contact')->unique();
            $table->bigInteger('emergenc')->unique();
            $table->integer('capacity');
            $table->text('image');
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
        Schema::dropIfExists('schools');
    }
}
