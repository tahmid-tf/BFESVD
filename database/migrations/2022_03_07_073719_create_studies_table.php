<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('es_value_id')->unique();
            $table->text('district')->nullable();
            $table->text('division')->nullable();
            $table->text('site_scale')->nullable();
            $table->text('other_1')->nullable();
            $table->text('teeb')->nullable();
            $table->text('location_name')->nullable();
            $table->text('legal_status')->nullable();
            $table->text('other_2')->nullable();
            $table->integer('site_area')->nullable();
            $table->text('site_unit')->nullable();
            $table->text('site_ha')->nullable();
            $table->text('site_condition_text')->nullable();
            $table->text('site_condition')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
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
        Schema::dropIfExists('studies');
    }
}
