<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->longText("avatar")->nullable();
            $table->longText("image")->nullable();
            $table->longText("background")->nullable();
            $table->enum('gender', [
                "Male",
                "Female",
            ]);
            $table->enum("classes", [
                "Adventurer",
                "Sorcerer",
                "Archer",
                "Swordsman",
                "Martial Artist",
            ]);
            $table->integer("level");
            $table->integer('clevel');
            $table->string('family')->nullable();
            $table->bigInteger('server')->unsigned();
            $table->foreign('server')->references('id')->on('servers');
            $table->bigInteger('account')->unsigned();
            $table->foreign('account')->references('id')->on('users');
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
        Schema::dropIfExists('characters');
    }
}
