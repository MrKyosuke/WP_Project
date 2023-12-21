<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>detail</title>
  <nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-body-tertiary shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Taskminder</a>
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</head>
<body>
  @if (Session::has('success-alert'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success-alert') }}
  </div>
  @endif

  <div class="container" style="padding-top: 60px">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body shadow-lg"> 
            <h5 class="card-title">Task Details</h5>
            <p class="card-text">
              <b>Task Title:</b> {{ $todo->title }}<br>
              <b>Task Description:</b> {{ $todo->description }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 justify-content-center">
      <div class="col-md-6">
        <div class="d-flex justify-content-center">
          <a href="{{url()->previous()}}" class="btn btn-outline-secondary flex-grow-1">Back</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>