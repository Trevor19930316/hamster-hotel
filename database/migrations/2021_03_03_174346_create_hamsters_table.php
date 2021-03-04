<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamsters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owners_id')->index();
            $table->string('name', 30);
            $table->string('category', 30);
            $table->unsignedTinyInteger('sex')->default(0);
            $table->unsignedTinyInteger('age_month')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('hamsters');
    }
}
