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
            $table->text('image');
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
            ])->nullable();
            $table->enum('gender', [
                "Male",
                "Female",
                "Unisex",
            ])->nullable();
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
