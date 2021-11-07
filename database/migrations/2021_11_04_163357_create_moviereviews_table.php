<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviereviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviereviews', function (Blueprint $table) {
            $table->increments('moviereview_id')->start_from(1);
            $table->string('moviereview_user');
            $table->string('moviereview_date');
            $table->integer('moviereview_rating');
            $table->string('moviereview_comment',10800);
            $table->string('movie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviereviews');
    }
}
