<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequierementDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requierement_details', function (Blueprint $table) {
            $table->id();
            $table->integer('request');
            $table->integer('delivered');
            $table->integer('return');
            $table->unsignedBigInteger('requirement_id');
            $table->unsignedBigInteger('item_id');
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
        Schema::dropIfExists('requierement_details');
    }
}
