<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasCompletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas_completas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rutaimg');
            $table->string('rutapag');
            $table->string('widget1');
            $table->string('widget2');
            $table->string('widget3');
            $table->string('star1');
            $table->string('star2');
            $table->string('star3');
            $table->string('star4');
            $table->string('star5');
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
        Schema::dropIfExists('paginas_completas');
    }
}
