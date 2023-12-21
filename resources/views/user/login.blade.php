<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Login</title>
</head>

<body>
  <section class="vh-100 bg-secondary">
    <div class="container py-5 h-100">
      @if (isset($error))
          <div class="row">
            <div class="alert alert-danger">
              {{$error}}
            </div>
          </div>
      @endif
      <div class="row d-flex justify-content-center align-items-center bg-light rounded-4 shadow-lg">

        <div class="col-12 col-md-6">
          <div class="card-body p-5 text-center">
            <img src="images/logoTaskMinder.png" width="100%" alt="logo">
          </div>
        </div>

        <div class="col-12 col-md-6 p-0">
          <div class="card bg-dark text-white d-flex" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-2 mt-md-2 pb-1">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your email and password!</p>

                <form action="{{ route('user.UserLogin') }}" method="POST">
                  @csrf
                  <div class="form-outline form-white mb-4">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  </div>
              
                  <div class="form-outline form-white mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  </div>
              
                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
              
                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </form>
              
              
              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="{{route('user.register')}}" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>