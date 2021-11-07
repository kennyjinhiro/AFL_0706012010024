@extends('layouts.defaultlayout')

@section('title', 'FilmReviews: Home')

@section('main_content')
    <div class="homewrapper d-flex align-items-center justify-content-evenly">
        <div class="p-lg-2">
            <div class="backgroundimagehome"> <img width="100%" height="100%" src="https://i.pinimg.com/originals/b9/21/a9/b921a98c5cb5563e347b74c58b5be44f.jpg" class="buttonfadeanimation"></div> 
            <h1 class="leftslideheaderanimation"><span class="fw-bold">Look for</span><span class="text-danger fw-bolder">&nbsp;quality movie reviews&nbsp;</span><span class="fw-bold">here.</span></h1>
            <h4 class="lead leftslideheaderanimation fw-bold"><small>Navigate around to add, update, see, delete movies.</small></h4>
            <h4 class="lead leftslideheaderanimation fw-bold"><small>Inside the movies, you also are able to either create, read, update, or delete reviews.</small></h4>
            <div class="d-flex my-lg-5">
                <span></span><a href="/movies" class="btn btn-dark btn-lg buttonfadeanimation">Get Started</a>
            </div>
        </div>
        <div class="p-lg-2">

        </div>
        <div class="p-2 maxdiv">
            <div id="carouselhome" class="carousel carousel-dark slide buttonfadeanimation" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.joblo.com/wp-content/uploads/2021/10/being-the-ricardos-poster.jpg" width="480px" height="680px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.joblo.com/wp-content/uploads/2019/06/the-batman-poster.jpg" width="480px" height="680px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.joblo.com/wp-content/uploads/2019/12/clifford-the-big-red-dog-poster.jpg" width="480px" height="680px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.joblo.com/wp-content/uploads/2019/12/top-gun-maverick_poster-1.jpg" width="480px" height="680px">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.joblo.com/wp-content/uploads/2021/09/encanto-poster.jpg" width="480px" height="680px">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselhome" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselhome" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    {{-- <div class="d-flex">
        <p class="lead">Navigate around to add, update, see, delete movies.</p>
        <p class="lead">Inside, you also are able to either create, read, update, or delete reviews.</p>
    </div> --}}
</div>
@endsection