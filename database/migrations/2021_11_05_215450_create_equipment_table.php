<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item')->unsigned();
            $table->foreign('item')->references('id')->on('items');
            $table->longText('image');
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
            $table->bigInteger('characters')->unsigned();
            $table->foreign('characters')->references('id')->on('characters');
            $table->bigInteger('account')->unsigned();
            $table->foreign('account')->references('id')->on('users');
            $table->boolean('hidden')->default(true);
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
        Schema::dropIfExists('equipment');
    }
}
