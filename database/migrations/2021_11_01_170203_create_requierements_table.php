<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequierementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requierements', function (Blueprint $table) {
            $table->id();
            $table->string('observation')->nullable();
            $table->string('delivered')->nullable();
            $table->string('recibe');
            $table->date('date_refund')->nullable();
            $table->string('state');
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
        Schema::dropIfExists('requierements');
    }
}
