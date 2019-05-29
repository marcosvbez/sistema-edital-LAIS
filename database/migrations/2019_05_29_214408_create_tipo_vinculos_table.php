<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_vinculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ds_vinculacao');
            $table->string('ds_tipo');
            $table->string('ds_subtipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_vinculos');
    }
}
