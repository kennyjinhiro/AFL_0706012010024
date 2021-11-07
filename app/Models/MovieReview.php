<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieReview extends Model
{
    use HasFactory;
    protected $table = 'moviereviews';
    public $timestamps = false;
    protected $fillable = [
        'moviereview_user',
        'moviereview_date',
        'moviereview_rating',
        'moviereview_comment',
        'movie_id'
    ];
    public function movies()
    {
        return $this->belongsTo(Movie::class,'movie_id' , 'movie_id');
    }
}
