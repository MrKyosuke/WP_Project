<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
</head>
<body>
  <section class="vh-100 bg-secondary">
    <div class="container py-5 h-100">
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
              <h2 class="text-uppercase text-center mb-4">Create an account</h2>

              <form action="<?php echo e(route('user.userRegister')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-outline mb-3">
                    <label class="form-label" for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                </div>
            
                <div class="form-outline mb-3">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                </div>
            
                <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>
            
                <div class="form-outline mb-3">
                    <label class="form-label" for="password_confirmation">Repeat your password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                </div>
            
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
            
                <div>
                    <p class="mb-0">Have already an account? <a href="<?php echo e(route('user.login')); ?>" class="text-white-50 fw-bold">Login here</a></p>
                </div>
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\web_project\resources\views/user/register.blade.php ENDPATH**/ ?>