<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDTMResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_t_m_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dtm_input_id');
            $table->foreign('dtm_input_id')->references('id')->on('d_t_m_inputs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('d_t_m_results');
    }
}
