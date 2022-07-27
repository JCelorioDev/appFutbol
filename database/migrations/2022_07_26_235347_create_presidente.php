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
        Schema::create('presidente', function (Blueprint $table) {
            $table->id();
            $table->string('nom_p');
            $table->string('ape_p');
            $table->string('cedula_p');
            $table->date('fecha_posecion_p');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presidente');
    }
};
