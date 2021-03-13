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

   <div class="text-center">
      <a href="#" class="btn btn-success mt-3">Create Post</a>
   </div>

   <div class="container mt-3">
    <table class="table">
    <thead>
        <tr>
            <th scope="col" style="color:red;">Pagination in lab 2</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>
              <a href="/posts/{{$post['id']}}" class="btn btn-info"> View</a>
              <a href="#" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach  
    </tbody>
    </table>
  </div>

  <div class="container">
    <p style="color:red;">Pagination in lab 2</p>
  </div>
   
</body>
</html>