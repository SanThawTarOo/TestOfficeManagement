<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article List</title>
</head>
<body>
  <h1>Article List</h1>
  <ul>
    @foreach($article as $value)
    <li>{{$value['title']}}</lit>
    @endforeach
  </ul>

  
</body>
</html>-->


@extends("layouts.app")

@section("content")
<div class="container">
  @foreach($article as $value)
  <div class="card mb-2">
    <div body="card-body">
      <h4 class="card-title">{{$value['title']}}</h4>
      <p class="card-text">{{$value['content']}}</p>
    </div>
  </div>
@endforeach
</div>
{{$article->links('pagination::bootstrap-4')}}
@endsection
