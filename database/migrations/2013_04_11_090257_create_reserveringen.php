<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gast_id')->references('id')->on('gasten');
            $table->foreignId('plaats_id')->references('id')->on('plaatsen');
            $table->date('datum_van');
            $table->date('datum_tot');
            $table->boolean('auto');
            $table->integer('personen');
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
        Schema::dropIfExists('reserveringen');
    }
};
