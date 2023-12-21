<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>

</head>
<body>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white ;">Add List</a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu Lists</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 20%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Add Lists</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-black">
  <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('todos.index') }}" style="color: white;">Home</a>
          </li>
          <li class="nav-item" style="color: white;">
            <a class="nav-link" href="{{ route('user.profile') }}" style="color: white;">Profile</a>
          </li>
          <li class="nav-item" style="color: white;">
            <a class="nav-link" href="#" style="color: white;">Settings</a>
          </li>
        </ul>
  </div>
</div>
  </div>
</nav>
  


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <div class="container d-flex justify-content-center" style="padding-top: 5%">
    <form method="POST" action="{{route('todos.store')}}" class="col-md-6 border p-4 rounded shadow-lg">
      @csrf
      <div class="mb-3">
        <label class="form-label"><b>Title</b></label>
        <input type="text" class="form-control" name="title" placeholder="Example input">
      </div>
      <div class="mb-3">
        <label class="form-label"><b>Description</b></label>
        <input name="description" class="form-control" cols="5" rows="5" placeholder="Another input">
      </div>
      <div class="d-flex justify-content-center p-1">
        <button type="submit" class="btn flex-grow-1 btn-primary">Submit</button>
      </div>
      <div class="d-flex justify-content-center p-1">
        <a href="{{url()->previous()}}" class="btn btn-outline-secondary flex-grow-1">back</a>
      </div>
    </form>
  </div>
</body>
</html>