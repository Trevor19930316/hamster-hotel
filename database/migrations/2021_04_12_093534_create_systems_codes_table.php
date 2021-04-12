<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems_codes', function (Blueprint $table) {
            $table->id();
            $table->string('belong_code', 50)->nullable()->index('index_belong_code');
            $table->string('code', 50)->index('index_code');
            $table->string('value', 255);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('sort')->index('index_sort');
            $table->tinyInteger('is_useful')->index('index_useful');
            $table->string('updated_by', 50);
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
        Schema::dropIfExists('systems_codes');
    }
}
