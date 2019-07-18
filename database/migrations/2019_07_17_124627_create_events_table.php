<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('venue')->nullable();
            $table->integer('divID')->unsigned()->nullable();
            $table->integer('regID')->unsigned();
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('grouping')->unsigned();
            $table->integer('type')->unsigned();
            $table->unsignedInteger('programId');
            $table->foreign('programId')->references('id')->on('programs');
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
        Schema::dropIfExists('events');
    }
}
