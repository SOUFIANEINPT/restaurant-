<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuCategoriesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tabels', function (Blueprint $table) {
             $table->unsignedInteger('categories_id');
             $table->unsignedInteger('menu_id');
             $table->foreign('categories_id')->references('id')->on('categories') ->onDelete('cascade');
             $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabels', function (Blueprint $table) {
            $table->dropColumn('menu_id');
            $table->dropColumn('categories_id');
        
        });
    }
}
