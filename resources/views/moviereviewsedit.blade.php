@extends('layouts.defaultlayout')

@section('title')
FilmReviews: Edit a Review for {{ $moviereviews->movies->movie_title }}
@endsection

@section('main_content')

    <div class="heightdivdetail">
        <div class="backgroundimage">
        <img src="{{ asset('storage/'.$moviereviews->movies->movie_background_picture) }}" class="opacitylow lowbrightness objectfitdetail heightdivdetailimg">
        </div>
        <div class="d-flex flex-row m-xxl-5">
            <div class="d-flex">
                <img src="{{ asset('storage/'.$moviereviews->movies->movie_picture) }}" class="buttonfadeanimation" height="400px" width="275px">
            </div>
            <div class="d-flex flex-column align-items-end justify-content-end ms-lg-5">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h1 class="mx-xl-5 my-n1 fw-bolder text-start text-white buttonfadeanimation">{{ $moviereviews->movies->movie_title }}</h1>
                        <hr/>
                        <h1></h1>
                        <h1></h1>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Movie ID: <span class="fw-bold text-white">{{ $moviereviews->movies->movie_id }}</span></h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Official Rating: <span class="fw-bold text-white">{{ $moviereviews->movies->movie_rating }}</span> / 5</h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Genre: <span class="fw-bold text-white">{{ $moviereviews->movies->movie_genre}}</span></h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Release Year: <span class="fw-bold text-white">{{ $moviereviews->movies->movie_year }}</span> </h5>
                        <p class="mx-xl-5 my-n1 fw-bold text-start text-white buttonfadeanimation"><span class="fw-bold text-white">{{ $moviereviews->movies->movie_description }}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-dark text-white mx-xxl-5 my-xxl-5">
            {{-- Komen --}}
            <form action="{{ route('moviereviews.update',$moviereviews->moviereview_id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <h2 class="fw-bolder mt-5 ms-5 buttonfadeanimation">Edit Your Own Review</h2>
                <div class="d-flex flex-row justify-content-start mb-2">
                    <input type="hidden" name="movie_id_key" value="{{ $moviereviews->movies->movie_id }}">
                    <div class="ms-5 me-4">
                        <label for="review_username" class="buttonfadeanimation fw-bold">Username</label>
                        <input type="text" class="form-control" id="review_username" name="moviereview_user" value="{{ $moviereviews->moviereview_user }}" readonly></input>
                    </div>
                    <div>
                        <label for="create_movie_id" class="buttonfadeanimation fw-bold">Rating</label>
                        <select name="moviereview_rating" id="create_movie_id" class="form-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 mx-5">
                    <label for="review_review" class="buttonfadeanimation fw-bold">Review</label>
                    <textarea class="form-control" id="review_review" rows="4" name="moviereview_comment"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary mb-2 btn-sm buttonfadeanimation">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection