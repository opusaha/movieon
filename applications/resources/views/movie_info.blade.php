<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .col-md-5{
            width: 47%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">MovieOn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/all-movies')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/upload')}}">Add movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/hollywood')}}">Hollywood</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            South Movies
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="telugu">Telugu</a></li>
                            <li><a class="dropdown-item" href="tamil">Tamil</a></li>
                            <li><a class="dropdown-item" href="malayalam">Malayalam</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/bollywood')}}">Bollywood</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-success text-light py-3 my-4">Please Join Our New Telegram Channel For All Exclusive Updates! <a href="" class="text-warning">Join Now</a></div>

    <div class="container my-2">
        <div class="row">
            <div class="col-xxl-8 px-4">
                @foreach($movies as $key =>$movie)
                <span class="p-1 bg-success">{{$movie->url}}</span>
                <span class="p-1 bg-primary mx-2">Opu</span>
                @endforeach
                <div>
                    <img src="" alt="">
                </div>
               <div class="details">
                <p class="text-danger text-center">IMDB Rating: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Genres: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Language: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Quality: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Size: <span class="text-dark">See Below</span></p>
                <p class="text-danger text-center">Director: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Stars: <span class="text-dark"></span></p>
                <p class="text-danger text-center">Story Line: <span class="text-dark"></span></p>
               </div>
               <div class="screenshot">
                <img src="" alt="">
               </div>
               <div class="download text-center">
                <button class="btn bg-info">Download</button>
               </div>
            </div>
            <div class="col-xxl-4">
                <div class="bg-warning p-2">
                    <strong>Search Whatever You Want</strong>
                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn bg-info btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="bg-warning p-2 my-3"><strong>Categories</strong></div>
                <div class="row gap-2 mx-2">
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Action</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Adventure</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Animations</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Anime (japan)</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Bangla Dubbed</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Bangla Subtitle</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Bengali</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Biography</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Bollywood</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">China</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Comedy</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Crime</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Documentary</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Drama</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Dual Audio</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Family</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Fantasy</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Hindi</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Hindi Dubbed</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">History</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Hollywood</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Horror</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Japan</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Kannada</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Korean</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Malayalam</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Musical</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Mystery</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Natok</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Others</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Persian</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Panjabi</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Reality Show</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Sci fi</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Sports</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Tamil</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Telugu</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Thai</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Thriller</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Turkish</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">Upcoming</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">War</a></div>
                    <div class="col-md-5 bg-primary py-2"><a href="" class="text-light text-decoration-none">TV Series</a></div>
                    <div class="col-md-6 bg-primary py-2"><a href="" class="text-light text-decoration-none">Western</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary text-center py-4">
        <div class="container">MovieOn.com</div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>