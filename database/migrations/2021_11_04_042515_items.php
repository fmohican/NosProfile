<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vnum')->unsigned();
            $table->text('name');
            $table->enum("slot", [
                "mask",
                "headband",
                "fairy",
                "primary",
                "card",
                "secondary",
                "gloves",
                "armor",
                "shoes",
                "ring",
                "necklet",
                "bracelet",
                "wing",
                "amulet",
                "w_skin",
                "c_hat",
                "c_body",
            ]);
            $table->enum("classes", [
                "Adventurer",
                "Sorcerer",
                "Archer",
                "Swordsman",
                "Martial Artist",
                "all",
            ])->default('all');
            $table->enum('gender', [
                "Male",
                "Female",
                "Unisex",
            ])->default("Unisex");
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
        Schema::dropIfExists('items');
    }
}
