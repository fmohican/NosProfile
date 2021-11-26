<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('slug');
            $table->string("name");
            $table->text("description");
            $table->string('web');
            $table->string('discord');
            $table->bigInteger('server')->nullable()->unsigned();
            $table->foreignId('server')->references('id')->on('servers');
            $table->bigInteger('head')->unsigned();
            $table->foreignId('head')->references('id')->on('characters');
            $table->bigInteger('deputy_one')->unsigned();
            $table->foreignId('deputy_one')->references('id')->on('characters');
            $table->bigInteger('deputy_two')->unsigned();
            $table->foreignId('deputy_two')->references('id')->on('characters');
            $table->softDeletes();
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
        Schema::dropIfExists('families');
    }
}
