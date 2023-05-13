@extends('layouts.app')

@section('main')


<!-- <!DOCTYPE html>
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
<body> -->

<div class="container">
  <h2>New Category</h2>

  @if (session()->has('success'))
          <div class="alert alert-info" role="alert">
            <strong>{{session()->get('success')}}</strong>
          </div> 
          @endif 

      <div class="col-sm-4">   
        <form method="post" action="category-store"> 
          
          @csrf
            <label> Title</label> 
            <input type="text" name="title" class="form-control"
            value="{{old ('title')}}"
            />

            @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
            <button class="btn btn-info mt-4" type="submit">create</button> 
</form>
</div>
</div>

@endsection

<!-- </body>
</html> -->