<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Taskminder</title>
</head>

<body class="bg-light">

  <nav class="navbar navbar-light bg-body-tertiary shadow-lg">
    <div class="container-fluid">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 20%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Home</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-black">
  <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('todos.index')); ?>" style="color: white;">Home</a>
          </li>
          <li class="nav-item" style="color: white;">
            <a class="nav-link" href="<?php echo e(route('user.profile')); ?>" style="color: white;">Profile</a>
          </li>
          <li class="nav-item" style="color: white;">
            <a class="nav-link" href="<?php echo e(route('user.settings')); ?>" style="color: white;">Settings</a>
          </li>
        </ul>
  </div>
</div>
          <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
          </button>
          
          
       
        <div class="ml-auto">
            <?php if(auth()->guard()->check()): ?>
                <form method="POST" action="<?php echo e(route('user.UserLogout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
  </nav>

  <div class="container mt-3">
    <?php if(Session::has('success-alert')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-alert')); ?>

      </div>
    <?php endif; ?>
    
    <?php if(Session::has('delete-alert')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('delete-alert')); ?>

      </div>
    <?php endif; ?>
    
    <?php if(Session::has('update-alert')): ?>
      <div class="alert alert-info" role="alert">
        <?php echo e(Session::get('update-alert')); ?>

      </div>
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo e(Session::get('error')); ?>

      </div>
    <?php endif; ?>

    <div class="container border p-4 shadow-lg rounded" style="padding-top: 50%">
      <h1 class="text-center">Dashboard</h1><br>
      <div class="d-flex justify-content-center">
        <table class="table table-striped" style="margin: 0 auto">
          <thead class="bg-light">
            <tr style="text-align: center">
              <th>Title</th>
              <th>Description</th>
              <th>Completed</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody style="text-align: center"> 
            <?php if(count($todos) > 0): ?>
              <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($todo->title); ?></td>
                  <td style="max-width: 100px; overflow: hidden"><?php echo e($todo->description); ?></td>
                  <td>
                    <form method="POST" action="<?php echo e(route('todos.toggleStatus', $todo->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <button type="submit" class="btn btn-link">
                            <?php if($todo->is_complete == 1): ?>
                                <span class="badge bg-success">Completed</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Incomplete</span>
                            <?php endif; ?>
                        </button>
                    </form>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Task Actions">
                      <a href="<?php echo e(route('todos.detail', $todo->id)); ?>" class="btn btn-success btn-sm rounded">Detail</a>
                      <a href="<?php echo e(route('todos.edit', $todo->id)); ?>" class="btn btn-primary btn-sm ms-2 rounded">Edit</a>
                      <form method="POST" action="<?php echo e(route('todos.remove')); ?>" class="ms-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('Delete'); ?>
                        <input type="hidden" name="todo_id" value="<?php echo e($todo->id); ?>">
                        <button type="submit" class="btn btn-danger btn-sm rounded">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
              <tr>
                <td colspan="4">
                  <h3>No task added</h3>
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4">
                <div class="d-flex justify-content-center">
                  <a href="<?php echo e(route('todos.create')); ?>" class="btn btn-outline-secondary flex-grow-1" style="font-size: 20px">+</a>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>      
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\web_project\resources\views/todos/index.blade.php ENDPATH**/ ?>