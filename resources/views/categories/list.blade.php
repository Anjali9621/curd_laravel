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
  <h2>Categories<a class="btn btn-info" href="/categroy-create">New Category</a></h2>

  @if (session()->has('success'))
          <div class="alert alert-info" role="alert">
            <strong>{{session()->get('success')}}</strong>
          </div> 
          @endif 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
    <tr>
        <td>{{$loop ->index+1}}</td>
        <td>{{$category->title}}</td>
        <td>

        <a href="/category-edit/{{ $category->id}}" class="btn-sm btn-info">Edit</a>
       <br/>

       <form  method="post" action="/category-delete/{{ $category->id}}">
        @csrf
        @method('delete')
<button type="submit" class="btn btn-sm btn-danger">Delete</button>

       </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$categories->links()}}
</div>


<@endsection>


<!-- </body>
</html> -->
