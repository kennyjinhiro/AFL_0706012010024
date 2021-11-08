@extends('layouts.defaultlayout')

@section('title','FilmReviews: Add A Movie')

@section('main_content')
    
<div class="d-flex flex-row pt-lg-5 pb-lg-5 justify-content-center">
    <div class="backgroundimagehome"> <img width="100%" height="145%" src="https://i.pinimg.com/originals/b9/21/a9/b921a98c5cb5563e347b74c58b5be44f.jpg"></div>     
        <div>
        <img src="https://wallpaperaccess.com/full/862206.jpg" width="300px" height="875px" class="d-flex cardnoroundedborder" >
        </div>
        <div class="card d-flex w-75 heightcard">
            <div class="card-body">
                <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mx-5">
                        <h3></h3>
                    </div>
                    <div class="mb-3 mx-5">
                        <h3 class="fw-bolder leftslideheaderanimation">Add a New Movie</h3>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_id">Movie ID</label>
                        <input type="text" class="form-control" id="create_movie_id" name="movie_id" required></input>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_title">Movie Title</label>
                        <input type="text" class="form-control" id="create_movie_title" name="movie_title" required></input>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_rating">Movie Official Rating</label>
                        <input type="text" class="form-control" id="create_movie_rating" name="movie_rating" required></input>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_description">Movie Description</label>
                        <textarea class="form-control" id="create_movie_description" rows="4" name="movie_description"></textarea>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_year">Movie Year</label>
                        <input type="text" class="form-control" id="create_movie_year" name="movie_year" required></input>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_genre">Movie Genre</label>
                        <input type="text" class="form-control" id="create_movie_genre" name="movie_genre" required></input>
                    </div>
                    {{-- 'movie_rating'=>'4',
                    'movie_description'=>'Loving all the aliens',
                    'movie_year'=>'2008',
                    'movie_genre'=>'Action --}}
                    <div class="mb-3 mx-5">
                        <label for="create_movie_picture" class="form-label">Movie Poster</label>
                        {{-- <input type="text" class="form-control" id="create_movie_picture" name="movie_picture" required></input> --}}
                        <input class="form-control" type="file" id="create_movie_picture" name="movie_picture" required>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="create_movie_background_picture" class="form-label">Movie Background</label>
                        {{-- <input type="text" class="form-control" id="create_movie_background_picture" name="movie_background_picture" required></input> --}}
                        <input class="form-control" type="file" id="create_movie_background_picture" name="movie_background_picture" required>
                    </div>
                    <div class="mb-3 mx-5">
                        <h2></h2>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary mb-2 btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
</div>  

@endsection