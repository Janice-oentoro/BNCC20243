<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/collection.css">
    
  <title>Home</title>
  </head>
  <body>
    
    <div class="container1">
      <nav class="navbar navbar-expand-lg py-1 navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="{{url('/images/icon.png')}}" width="40" height="40"
          class="d-inline-block align-top" alt="">
          Scholar Library
        </a>
  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/collection">Collection<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create">Add Book</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
  <img src="{{url('/images/bookmark.jpg')}}" style="width:100%; height:350px">
  <div class="container">
    <div class="centered">
      "Sleep is good, he said, and books are better."
    </div>
    <div class="center_small">
      -George R.R. Martin
    </div>
  </div>

  <div class="category">
    Our Category
  </div>

    <div class="container_2">
      <div class="row">
        @foreach($books as $book)
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="{{url('/images/bookcover.png')}}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">Author: {{$book->author}}</p>
                <p class="card-text">Number of Pages: {{$book->pages}}</p>
                <p class="card-text">Year Publish: {{$book->year}}</p>
                <a href="/update/{{$book->id}}" class="btn btn-success">Edit</a>  

                <form action="/delete/{{$book->id}}" method="POST">
                    @csrf
                    @method('delete')
                   <button class="btn btn-danger">Delete</button> 
                </form>
              </div>
            </div>
          </div>
        @endforeach 
      </div>  
    </div>




    <!-- Optional JavaScript; choose one of the two!  width:36.15cm; height:20cm -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>