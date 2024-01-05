<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body><div class="container">

    <h1>Hello!!</h1>
    <form action="{{/}}/registration" method="POST">
    <div class="form-group">
    <input type="text" name="name" id="" class="form-control" placeholder="Enter Name"/>
    </div>
    <div class="form-group">
        <input type="text" name="number" id="" class="form-control" placeholder="Enter Number"/>
    </div><div class="form-group">
        <input type="email" name="" id="email" class="form-control" placeholder="Enter E-mail"/>
    </div><div class="form-group">
        <input type="password" name="" id="password" class="form-control" placeholder="Enter Password"/>
    </div>
    <button class="btn btn-primary">Sign Up</button>
    </form>
    </div>
    
  </body>
</html>