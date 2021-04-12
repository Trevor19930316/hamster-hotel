<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('key', 100)->index('index_key');
            $table->text('value')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_useful')->index('index_useful');
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
        Schema::dropIfExists('systems_parameters');
    }
}
