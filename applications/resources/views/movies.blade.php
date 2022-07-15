<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: #eee;
        }

        .home-wrapper {
            padding: 0 20px;
        }

        .thumbnail-wrapper .thumb {
            padding: 0 5px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
        }

        .thumbnail-wrapper figure {
            position: relative;
            margin-bottom: 10px;
            cursor: pointer;
            overflow: hidden;
            border: 2px solid #fff;
            box-shadow: 0 1px 1px rgb(204 197 185 / 50%);
        }

        .thumbnail-wrapper img {
            width: 100%;
            height: 287px;
            transition: .2s;
            vertical-align: middle;
        }

        .thumbnail-wrapper figcaption {
            position: absolute;
            bottom: 0;
            display: block;
            width: 100%;
            text-align: center;
            content: "";
            background-color: rgba(255, 255, 255, 0);
            background: linear-gradient(transparent, #000 80%);
            z-index: 111;
        }

        .thumbnail-wrapper .thumb-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            height: 100%;
            background-color: rgba(15, 15, 15, .7);
            z-index: 100;
            text-align: center;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
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


    <div class="container">
        <div class="home-wrapper thumbnail-wrapper row">
            @foreach($movies as $key =>$movie)
            <div class="thumb col-xxl-2 col-xl-3 col-md-3 col-sm-4 col-6 h-100">
                <figure>
                    <img src="{{$movie->thumbnail}}" alt="{{$movie->title}}" title="{{$movie->title}}">
                    <figcaption>
                        <a href="{{url($movie->url)}}" class="link">
                            <p>{{$movie->title}}</p>
                        </a>
                    </figcaption>
                    <a href="{{url($movie->url)}}">
                        <div class="thumb-hover">
                        </div>
                    </a>
                </figure>
            </div>
            @endforeach
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>