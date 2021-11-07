<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('movie_id')->primary();
            $table->string('movie_title');
            $table->double('movie_rating');
            $table->string('movie_description',10800);
            $table->integer('movie_year');
            $table->string('movie_genre');
            $table->string('movie_picture');
            $table->string('movie_background_picture');
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
