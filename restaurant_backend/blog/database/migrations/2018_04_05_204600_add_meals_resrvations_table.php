<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMealsResrvationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resrvations', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('typeOfMeal');
            $table->unsignedInteger('table_id');
            $table->foreign('typeOfMeal')->references('id')->on('meals') ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('table_id')->references('id')->on('tabels') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resrvations', function (Blueprint $table) {
            $table->dropColumn('typeOfMeal');
            $table->dropColumn('table_id');
            $table->dropColumn('user_id');
        });
    }
}
