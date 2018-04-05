<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('categories_id');
            $table->integer('menu_id');
            $table->string('Nombrechaire');
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')
            ->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabels');
    }
}
