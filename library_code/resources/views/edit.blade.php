<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/create.css">
  <title>Edit Book</title>

</head>
<body>
    <div class="container">
        <h1>Add New Book</h1>
        <form action="/update/{{$book->id}}" method="POST">
          @csrf
          @method('put')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" value="{{$book->title}}" name="title" id="title" placeholder="Book Title">
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" value="{{$book->author}}" name="author" id="author" placeholder="Book Author">
              </div>

            <div class="form-group">
              <label for="pages">Number of Pages</label>
              <input type="number" class="form-control" value="{{$book->pages}}" name="pages" id="pages" placeholder="Total Pages">
            </div>

            <div class="form-group">
                <label for="year">Year Published</label>
                <input type="number" class="form-control" value="{{$book->year}}" name="year" id="year" placeholder="Year Published">
              </div>
            
            <a href="/collection" class="btn btn-success">Back</a>
            <button class="btn btn-primary">Save Edit</button>

        </form>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>