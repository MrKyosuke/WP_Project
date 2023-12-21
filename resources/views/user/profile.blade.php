<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
      .body{
        min-height: 10px; /* Set minimum height to 100% of the viewport height */
        max-height: 400px; /* Set maximum height as needed */
        background-color: #f8f9fa; /* Change the background color if needed */
      }

      .activity{
        position: absolute;
      top: 30%; /* Adjust the percentage as needed */
      left: 50%;
      transform: translate(-50%, -50%);
      }

      .password{
        position: absolute;
      top: 76%; /* Adjust the percentage as needed */
      left: 50%;
      transform: translate(-50%, -50%);
      }

      .card-header{
        color: white;
      }

    </style>

  </head>
  <body class="body bg-body-tertiary shadow-lg">

  <div class="activity bg-body-tertiary shadow-sm">
    <div class="card mb-3" style="width: 35rem;">
        <div class="card-header bg-dark text-center">Activities</div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Completion Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{$todo->title}}</td>
                            <td>
                                @if ($todo->is_complete == 1)
                                    <span class="badge bg-success">Completed</span>
                                @else
                                    <span class="badge bg-danger">Incomplete</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<body class="body bg-body-tertiary shadow-lg">

<!-- Add this section to display messages -->
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="password bg-body-tertiary shadow-sm">
    <div class="card mb-3" style="width: 35rem;">
        <div class="position-relative">
            <div class="card-header bg-dark" style="text-align: center;">Change Password</div>
            <div class="card-body">
                <form method="POST" action="{{ route('todos.profile.updatePassword') }}">
                    @csrf

                    <div class="card-box">
                        <input type="password" class="form-control" placeholder="Enter current password" name="current_password" required>
                    </div>

                    <div class="card-box">
                        <input type="password" class="form-control" placeholder="Enter new password" name="new_password" required>
                    </div>

                    <div class="card-box">
                        <input type="password" class="form-control" placeholder="Confirm new password" name="new_password_confirmation" required>
                    </div>

                    <button type="submit" class="btn btn-light" style="margin-top: 20px;">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="dropdown">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{ route('todos.index') }}">Home</a></li>
            <li><a class="dropdown-item" href="{{ route('todos.create') }}">Add List</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>