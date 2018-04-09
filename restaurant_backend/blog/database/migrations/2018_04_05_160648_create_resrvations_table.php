<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResrvationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resrvations', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('type');
            $table->boolean('experation');
            $table->timestamp('dateDebut');
            $table->timestamp('dateFin');
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
        Schema::dropIfExists('resrvations');
    }
}
