<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('href')->nullable();
            $table->string('icon')->nullable();
            $table->string('slug'); // title,link,dropdown
            $table->integer('parent_id')->unsigned()->nullable(); // menus.id
            $table->integer('menu_list_id')->unsigned(); // menu_list.id
            $table->integer('sequence')->index(); // 順序
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
        Schema::dropIfExists('menus');
    }
}
