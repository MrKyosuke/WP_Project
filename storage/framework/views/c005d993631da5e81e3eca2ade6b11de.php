<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Your head content here -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
</head>

<body>
  <!-- Navbar section -->
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

  <!-- Registration form section -->
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <!-- Registration form -->
                <form method="POST" action="<?php echo e(route('todos.register')); ?>">
                  <?php echo csrf_field(); ?> <!-- CSRF Token -->

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password_confirmation" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" name="terms_agreed" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree to all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
                </form>
                <!-- End of Registration form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Registration form section -->

  <!-- Additional content or scripts can be added here -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\web_project\resources\views/register.blade.php ENDPATH**/ ?>