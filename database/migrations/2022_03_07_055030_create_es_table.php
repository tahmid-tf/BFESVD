<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('es', function (Blueprint $table) {
            $table->id();
            $table->string('es_value_id')->unique();
            $table->longText('es_bundle')->nullable();
            $table->text('es_class')->nullable();
            $table->text('es_text')->nullable();
            $table->text('sub_es_text')->nullable();
            $table->text('teeb')->nullable();
            $table->text('iucn')->nullable();
            $table->string('user_id');
            $table->text('comment')->nullable();

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
        Schema::dropIfExists('es');
    }
}
