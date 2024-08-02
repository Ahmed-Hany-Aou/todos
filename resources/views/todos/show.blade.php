<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <title>Todo item</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center my-5">
      {{ $todo->name }}
    </h1>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            Details
          </div>
    
          <div class="card-body">
            {{ $todo->description }}
          </div>

      
        </div>
        <a href="/todos/{{$todo->id}}/edit" class= "btn btn-info my-2">Edit</a>
        
        <form action="/todos/{{ $todo->id }}/delete" method="POST" class="float-left mr-2">
                @csrf
                <button type="submit" class="btn btn-danger  my-2">Delete</button>
              </form>
      </div>
    </div>
  </div>
</body>
</html>