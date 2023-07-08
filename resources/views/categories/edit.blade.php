 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head> 
<body>

<div class="container pt-5">
  <h2>Edit Category</h2>
  <div class="row">
      <div class="col-sm-4">   
        <form method="post" action="/category.update/{{$category->id}}" > 
          
          @csrf
          @method('put')
            <label> Title</label> 
            <input type="text" name="title" class="form-control" value="{{$category->title}}"/>
            <button class="btn btn-info mt-4" type="submit">Update</button> 
</form>
</div>
</div>
</div>

 </body>
</html>
