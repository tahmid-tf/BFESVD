<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->text('data_entered_by')->nullable();
            $table->date('data_entered_date')->nullable();
            $table->string('reviewer_name')->nullable();
            $table->date('reviewer_date')->nullable();
            $table->text('notes')->nullable();
            $table->longText('comment')->nullable();
            $table->string('es_value_id')->unique();
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
        Schema::dropIfExists('data');
    }
}
