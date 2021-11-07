<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('movies',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('moviescreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        // ddd($request->file('create_movie_picture'));
        //
        // return $request->file('create_movie_picture')->store('img');
        // return $request->file('create_movie_background_picture')->store('img');
        // 'course_code' => $request->course_code,
            // 'course_name' => $request->course_name,
            // 'lecturer' => $request->lecturer,
            // 'number_sks' => $request->number_sks,
            // 'description' => $request->description
            // $table->string('movie_id')->primary();
            // $table->string('movie_title');
            // $table->integer('movie_rating');
            // $table->string('movie_description');
            // $table->integer('movie_year');
            // $table->string('movie_genre');
            // $table->string('movie_picture');
            // $table->string('movie_background_picture');
        Movie::create([
            'movie_id' => $request->movie_id,
            'movie_title' => $request->movie_title,
            'movie_rating' => $request->movie_rating,
            'movie_description' => $request->movie_description,
            'movie_year' => $request->movie_year,
            'movie_genre' => $request->movie_genre,
            'movie_picture' => $request->file('movie_picture')->store('img'),
            'movie_background_picture' => $request->file('movie_background_picture')->store('img')
        ]);
        
        
        return redirect(route('movies.index'));
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
        $movies = Movie::where('movie_id', $id)->first();
        return view('moviesdetail',compact('movies'));
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
        $movies = Movie::where('movie_id', $id)->first();
        return view('moviesedit',compact('movies'));
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
        $movies = Movie::where('movie_id', $id);
        Storage::delete($request->movie_old_picture);
        Storage::delete($request->movie_old_background_picture);
        $movies->update([
            'movie_id' => $request->movie_id,
            'movie_title' => $request->movie_title,
            'movie_rating' => $request->movie_rating,
            'movie_description' => $request->movie_description,
            'movie_year' => $request->movie_year,
            'movie_genre' => $request->movie_genre,
            'movie_picture' => $request->file('movie_picture')->store('img'),
            'movie_background_picture' => $request->file('movie_background_picture')->store('img')
        ]);
        return redirect(route('movies.index'));
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
        $movies = Movie::where('movie_id', $id);
        $movies->delete();
        return redirect(route('movies.index'));
    }
}
