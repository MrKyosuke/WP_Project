<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Your head content here -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Login</title>
  <!-- Navbar -->
  <nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->

      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">TaskMinder</a>
          </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex align-items-center">
          <a href="<?php echo e(route('todos.login')); ?>">
            <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
              Login
            </button>
          </a>
          <a href="<?php echo e(route('todos.register')); ?>">
            <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
              Sign up for free
            </button>
          </a>
          <a
            data-mdb-ripple-init
            class="btn btn-dark px-3"
            href="https://github.com/mdbootstrap/mdb-ui-kit"
            role="button"
          >
            <i class="fab fa-github"></i>
          </a>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</head>
<body>
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <form method="POST" action="<?php echo e(route('todos.login.post')); ?>">
                  <?php echo csrf_field(); ?> <!-- CSRF Token -->

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                </form>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="<?php echo e(route('todos.register')); ?>" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\web_project\resources\views/login.blade.php ENDPATH**/ ?>