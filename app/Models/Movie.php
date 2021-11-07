<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'movie_id',
        'movie_title',
        'movie_rating',
        'movie_description',
        'movie_year',
        'movie_genre',
        'movie_picture',
        'movie_background_picture'
    ];
    public function moviereviews()
    {
        return $this->hasMany(MovieReview::class,'movie_id' , 'movie_id');
    }
}
