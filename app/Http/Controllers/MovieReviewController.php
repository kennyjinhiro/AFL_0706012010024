<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieReview;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class MovieReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        MovieReview::create([
            'moviereview_user'=>$request->moviereview_user,
            'moviereview_rating'=>$request->moviereview_rating,
            'moviereview_comment'=>$request->moviereview_comment,
            'movie_id'=>$request->movie_id_key,
            'moviereview_date'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        $movies = Movie::where('movie_id', $request->movie_id_key)->first();
        return view('moviesdetail',compact('movies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $moviereviews = MovieReview::where('moviereview_id', $id)->first();
        return view('moviereviewsedit',compact('moviereviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $moviereviews = MovieReview::where('moviereview_id', $id);
        $moviereviews->update([
            'moviereview_user'=>$request->moviereview_user,
            'moviereview_rating'=>$request->moviereview_rating,
            'moviereview_comment'=>$request->moviereview_comment,
            'movie_id'=>$request->movie_id_key,
            'moviereview_date'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        $movies = Movie::where('movie_id', $request->movie_id_key)->first();
        return view('moviesdetail',compact('movies'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $moviereviews = MovieReview::where('moviereview_id', $id);
        $moviereviews->delete();
        
        return back();
    }
}
