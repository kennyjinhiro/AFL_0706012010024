@extends('layouts.defaultlayout')

@section('title')
FilmReviews: {{ $movies->movie_title }}
@endsection

@section('main_content')
    <div class="heightdivdetail">
        <div class="backgroundimage">
        <img src="{{ asset('storage/'.$movies->movie_background_picture) }}" class="opacitylow lowbrightness objectfitdetail heightdivdetailimg">
        </div>
        <div class="d-flex flex-row m-xxl-5">
            <div class="d-flex">
                <img src="{{ asset('storage/'.$movies->movie_picture) }}" class="buttonfadeanimation" height="400px" width="275px">
            </div>
            <div class="d-flex flex-column align-items-end justify-content-end ms-lg-5">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h1 class="mx-xl-5 my-n1 fw-bolder text-start text-white buttonfadeanimation">{{ $movies->movie_title }}</h1>
                        <hr/>
                        <h1></h1>
                        <h1></h1>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Movie ID: <span class="fw-bold text-white">{{ $movies->movie_id }}</span></h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Official Rating: <span class="fw-bold text-white">{{ $movies->movie_rating }}</span> / 5</h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Genre: <span class="fw-bold text-white">{{ $movies->movie_genre}}</span></h5>
                        <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation">Release Year: <span class="fw-bold text-white">{{ $movies->movie_year }}</span> </h5>
                        <p class="mx-xl-5 my-n1 fw-bold text-start text-white buttonfadeanimation"><span class="fw-bold text-white">{{ $movies->movie_description }}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none">
            {{ $show = 0 }}
            {{ $total = 0 }}
            @foreach($movies->moviereviews as $moviereviews)
                @if($loop->count > 0)
                    {{ $total += $moviereviews->moviereview_rating }}
                    {{ $community_rating = $total / $loop->count }}
                    {{ $community_rating = number_format((float)$community_rating, 1, '.', '') }}
                    {{ $show = 1 }}
                @else
                @endif
            @endforeach
            </div>
            @if ($show === 1)
            <div class="card bg-dark text-white mx-xxl-5 my-xxl-5 p-xxl-4">
                <h5 class="mx-xl-5 my-n1 fw-bolder text-danger buttonfadeanimation d-flex justify-content-center">Community Average Rating: &nbsp;<span class="fw-bold text-white"> {{ $community_rating }} &nbsp;</span> / 5</h5>
            </div>
            @endif
        <div class="card bg-dark text-white mx-xxl-5 my-xxl-5">
            {{-- Komen --}}
            <form action="{{ route('moviereviews.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                <h2 class="fw-bolder mt-4 ms-5 buttonfadeanimation">Add Your Own Review</h2><hr/>
                </div>  
                <div class="d-flex flex-row justify-content-start mb-2">
                    <input type="hidden" name="movie_id_key" value="{{ $movies->movie_id }}">
                    <div class="ms-5 me-4">
                        <label for="review_username" class="buttonfadeanimation fw-bold">Username</label>
                        <input type="text" class="form-control" id="review_username" name="moviereview_user" required></input>
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
        @foreach($movies->moviereviews as $moviereviews)
        <div class="card bg-dark text-white mx-xxl-5 my-xxl-5">
            <div class="card-header"><p></p><h3 class="text-white fw-bold buttonfadeanimation">{{ $moviereviews->moviereview_user}}</h3><p class="buttonfadeanimation"><p class=" buttonfadeanimation"><span class="text-white fw-bolder">Date:</span> {{$moviereviews->moviereview_date}}</p><p class="buttonfadeanimation"><span class="text-white fw-bolder buttonfadeanimation">Rating:</span> {{ $moviereviews->moviereview_rating}} / 5</p><hr/></div>
            <div class="card-body">
                {{-- <h5 class="card-title">Dark card title</h5> --}}
                <p class="card-text buttonfadeanimation">{{ $moviereviews->moviereview_comment}}</p>
                <h1></h1>
                <div class="d-flex flex-row align-items-end justify-content-end">
                    <a type="button" href="{{ route('moviereviews.edit',$moviereviews->moviereview_id) }}" class="btn btn-lg btn-light mx-1 text-capitalize buttonfadeanimation">Edit Comment</a>
                    <form action="{{ route('moviereviews.destroy',$moviereviews->moviereview_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-lg btn-light mx-1 text-capitalize buttonfadeanimation">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection