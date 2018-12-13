<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->decimal('price', 6, 2);
            $table->string('summary');
            $table->string('releaseDate', 50);
            $table->text('mainCast');
            $table->string('directors', 100);
            $table->string('region', 100);
            $table->string('runTime', 50);
            $table->string('type', 50);
            $table->string('language', 100);
            $table->string('producers', 100);
            $table->string('writers', 100);
            $table->integer('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
