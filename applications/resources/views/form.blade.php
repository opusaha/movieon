<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
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
    <div class="container">
        <form class="w-50" action="{{url('/store-data')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Movie Name</label>
                <input type="text" name="title" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Movie Details</label>
                <textarea type="text" name="details" class="form-control" id="exampleInputDetails1" aria-describedby="detailsHelp" placeholder="Enter details"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlThumbnail">Thumbnail</label>
                <input type="text" class="form-control" id="exampleFormControlThumbnail" name="thumbnail" placeholder="Thumbnail">
            </div>
            <div class="form-group">
                <label for="exampleFormControlImage">Image</label>
                <input type="text" class="form-control" id="exampleFormControlImage" name="image" placeholder="image">
            </div>
            <div class="form-group">
                <label for="exampleFormControlScreenshot">Screenshot</label>
                <input type="text" class="form-control" id="exampleFormControlScreenshot" name="screenshot" placeholder="Screenshot">
            </div>
            <div class="form-group">
                <label for="exampleInputDownload">Download Link</label>
                <input type="text" class="form-control" id="exampleInputDownload1" placeholder="Download Link" name="download">
            </div>
            <div class="form-group row">
                <label><strong>Category</strong></label></br>
                <label class="col-4"><input type="radio" name="category" value="english"> English</label>
                <label class="col-4"><input type="radio" name="category" value="hindi"> Hindi</label>
                <label class="col-4"><input type="radio" name="category" value="malayalam"> Malayalam</label>
                <label class="col-4"><input type="radio" name="category" value="telugu"> Telugu</label>
                <label class="col-4"><input type="radio" name="category" value="Tamil"> Tamil</label>
                <label class="col-4"><input type="radio" name="category" value="bangla"> Bangla</label>
                <label class="col-4"><input type="radio" name="category" value="animation"> Animation</label>
                <label class="col-4"><input type="radio" name="category" value="web-series"> Web Series</label>
                <label class="col-4"><input type="radio" name="category" value="dual"> Dual Audio</label>
            </div>
            <div class="form-group">
                <label for="exampleInputUrl">Url</label>
                <input type="text" class="form-control" id="exampleInputUrl" placeholder="Url" name="url">
            </div>
            <div class="form-group row">
                <label><strong>Year</strong></label></br>
                <label class="col-3"><input type="radio" name="year" value="2020"> 2020</label>
                <label class="col-3"><input type="radio" name="year" value="2021"> 2021</label>
                <label class="col-3"><input type="radio" name="year" value="2022"> 2022</label>
                <label class="col-3"><input type="radio" name="year" value="2023"> 2023</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>