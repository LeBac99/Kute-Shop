<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVarilantValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varilant_values', function (Blueprint $table) {
            $table->integer('value_id')->unsigned();
            $table->integer('varilant_id')->unsigned();
            $table->foreign('value_id')->references('id')->on('values')->onDelete('cascade');
            $table->foreign('varilant_id')->references('id')->on('varilant')->onDelete('cascade');
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
        Schema::dropIfExists('varilant_values');
    }
}
