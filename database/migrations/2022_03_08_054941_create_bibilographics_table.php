<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibilographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibilographics', function (Blueprint $table) {
            $table->id();
            $table->string("es_value_id")->unique();
            $table->text("author")->nullable();
            $table->text("year_publication")->nullable();
            $table->text("title")->nullable();
            $table->text("full_reference")->nullable();
            $table->text("study_link")->nullable();
            $table->text("research_link")->nullable();
            $table->text('comment')->nullable();

            $table->string("user_id");
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
        Schema::dropIfExists('bibilographics');
    }
}
