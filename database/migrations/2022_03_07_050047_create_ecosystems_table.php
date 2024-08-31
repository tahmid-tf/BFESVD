<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcosystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecosystems', function (Blueprint $table) {
            $table->id();
            $table->string('es_value_id')->unique();
            $table->text('fao_biome')->nullable();
            $table->text('ecosystem')->nullable();
            $table->text('teeb')->nullable();
            $table->text('zone')->nullable();
            $table->text('others')->nullable();
            $table->text('zone_text')->nullable();
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
        Schema::dropIfExists('ecosystems');
    }
}
