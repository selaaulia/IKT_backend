<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDPMInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_p_m_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penguji_id');
            $table->foreign('penguji_id')->references('id')->on('pengujis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('transformator_id');
            $table->foreign('transformator_id')->references('id')->on('transformators')->onDelete('cascade')->onUpdate('cascade');
            $table->double('H2');
            $table->double('CH4');
            $table->double('C2H2');
            $table->double('C2H4');
            $table->double('C2H6');
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
        Schema::dropIfExists('d_p_m_inputs');
    }
}
