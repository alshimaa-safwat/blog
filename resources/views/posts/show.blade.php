<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">ITI Blog</a>
            <a class="nav-item nav-link" href="#">All Posts</a>
            </div>
        </div>
    </nav> 
   </div>

   <div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Post info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title :- {{$post['title']}}</h5> 
            <p class="card-text">Description :- {{$post['description']}}</p>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name :- {{$post['title']}}</h5> 
            <p class="card-text">Email :- {{$post['email']}}</p>
            <p class="card-text">Created At :- {{$post['created_at']}}</p>
        </div>
    </div>
   </div>
         
</body>
</html>