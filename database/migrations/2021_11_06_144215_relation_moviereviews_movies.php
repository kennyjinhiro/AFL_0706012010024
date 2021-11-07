<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationMoviereviewsMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moviereviews', function (Blueprint $table) {
            //
            //
            $table->foreign('movie_id')
            ->references('movie_id')->on('movies')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('moviereviews', function (Blueprint $table) {
            //
        });
    }
}
