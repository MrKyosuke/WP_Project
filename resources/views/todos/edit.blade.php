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
  <form method="POST" action="{{route('todos.update')}}">
    @csrf
    @method('PUT')
    <input type="hidden" name="todo_id" value="{{$todo->id}}">

    <div class="container d-flex justify-content-center">
      <div class="col-md-6 border p-4 rounded shadow-lg">
        <h3>Edit Task</h3>
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Edit title" value="{{$todo->title}}">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input name="description" class="form-control" cols="5" rows="5" placeholder="Edit desc" value="{{$todo->description}}">
        </div>
        <div>
          <div class="d-flex justify-content-center p-1">
            <button type="submit" class="btn btn-primary flex-grow-1">Submit</button>
          </div>
          <div class="d-flex justify-content-center p-1">
            <a href="{{route('todos.index')}}" class="btn btn-outline-secondary flex-grow-1">Back</a>
          </div>
        </div>
      </div>
    </div>

  </form>
</body>
</html>