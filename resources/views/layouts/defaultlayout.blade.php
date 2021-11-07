<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/cssfiles/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield("title")</title>
</head>
<body>
    <nav class="navbar navbar-expand-xxl navbar-dark bg-dark py-4" aria-label="Tenth navbar example">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item px-5">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="notextdecoration" href="/"><h2 class="text-white fw-bold">Film<span class="text-danger fw-bold">Reviews</span></h2></a>
                
              </li>
              <li class="nav-item px-5">
                <a class="nav-link active" aria-current="page" href="/movies">Movies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield("main_content")
</body>
</html>