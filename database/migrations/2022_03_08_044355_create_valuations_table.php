<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuations', function (Blueprint $table) {
            $table->id();
            $table->string('es_value_id')->unique();
            $table->text('valuation_method')->nullable();
            $table->text('valuation_other_1')->nullable();
            $table->text('valuation_other_2')->nullable();
            $table->text('valuation_measured_text')->nullable();
            $table->text('value_original')->nullable();
            $table->text('value_total')->nullable();
            $table->text('value_currency')->nullable();
            $table->text('value_year')->nullable();
            $table->text('spatial_unit')->nullable();
            $table->text('temporal_unit')->nullable();
            $table->text('beneficial_unit')->nullable();
            $table->text('beneficial_other_1')->nullable();
            $table->text('beneficial_other_2')->nullable();
            $table->text('beneficial_number')->nullable();
            $table->text('beneficial_text')->nullable();
            $table->text('comment')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('valuations');
    }
}
