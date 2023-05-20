<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDPMResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_p_m_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dpm_input_id');
            $table->foreign('dpm_input_id')->references('id')->on('d_p_m_inputs')->onDelete('cascade')->onUpdate('cascade');
            $table->double('Cx');
            $table->double('Cy');
            $table->string('Fault');
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
        Schema::dropIfExists('d_p_m_results');
    }
}
