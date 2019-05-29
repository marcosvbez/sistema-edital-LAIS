<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('ch_total');
            $table->integer('cbo_id');
            $table->integer('tipo_vinculo_id');
            $table->integer('profissional_id');
            $table->foreign('cbo_id')->references('id')->on('cbos');
            $table->foreign('tipo_vinculo_id')->references('id')->on('tipo_vinculos');
            $table->foreign('profissional_id')->references('id')->on('profissionals');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinculos');
    }
}
