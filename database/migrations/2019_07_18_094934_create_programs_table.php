<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('title')->unsigned();
            $table->unsignedBigInteger('keystage_id');
            $table->foreign('keystage_id')->references('id')->on('keystages');
            $table->unsignedBigInteger('mfo_id');
            $table->foreign('mfo_id')->references('id')->on('mfos');
            $table->year('fy');
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
        Schema::dropIfExists('programs');
    }
}
