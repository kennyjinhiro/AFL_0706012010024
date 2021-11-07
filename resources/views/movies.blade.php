@extends('layouts.defaultlayout')

@section('title','FilmReviews: Movies')

@section('main_content')
    
    {{-- $movies already work --}}
    <div class="maxdivmovies">
    
        <div id="carouselmovies" class="carousel carousel-dark slide buttonfadeanimation" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($movies as $movie)
                @if ($loop->index === 1)
                <div class="carousel-item active">
                    <div>
                        <img src="{{ asset('storage/'.$movie->movie_background_picture) }}" class="opacitylow w-100 lowbrightness backgroundimgresize">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="d-flex justify-content-center">
                            <img class="buttonfadeanimation" src="{{ asset('storage/'.$movie->movie_picture) }}" width="280px" height="400px">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                            <h1 class="fw-bolder leftslideheaderanimation">{{ $movie->movie_title }}</h1>
                            </div>
                            <div class="d-flex align-self-start">
                                <a type="button" href="{{ route('movies.create') }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Add a New Movie</a>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex maxwidthdescription">
                            <p class="fw-bolder text-start leftslideheaderanimation"><small>{{ $movie->movie_description }}</small></p>
                            </div>
                            <div class="d-flex flex-row align-items-end">
                                <a type="button" href="{{ route('movies.show', $movie->movie_id) }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Show Reviews</a>
                                <a type="button" href="{{ route('movies.edit', $movie->movie_id) }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Edit</a>
                                <form action="{{ route('movies.destroy', $movie->movie_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <div>
                        <img src="{{ asset('storage/'.$movie->movie_background_picture) }}" class="opacitylow w-100 lowbrightness backgroundimgresize">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="d-flex justify-content-center">
                            <img class="buttonfadeanimation" src="{{ asset('storage/'.$movie->movie_picture) }}" width="280px" height="400px">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                            <h1 class="fw-bolder leftslideheaderanimation">{{ $movie->movie_title }}</h1>
                            </div>
                            <div class="d-flex align-self-start">
                                <a type="button" href="{{ route('movies.create') }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Add a New Movie</a>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex maxwidthdescription">
                            <p class="fw-bolder text-start leftslideheaderanimation"><small>{{ $movie->movie_description }}</small></p>
                            </div>
                            <div class="d-flex flex-row align-items-end">
                                <a type="button" href="{{ route('movies.show', $movie->movie_id) }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Show Reviews</a>
                                <a type="button" href="{{ route('movies.edit', $movie->movie_id) }}" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Edit</a>
                                <form action="{{ route('movies.destroy', $movie->movie_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-lg mx-1 text-capitalize buttonfadeanimation">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselmovies" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselmovies" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection