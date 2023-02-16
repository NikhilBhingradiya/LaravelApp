

@extends('pages.master')
    @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>All Category</h1>
@foreach($categories as $category)
    id :{{$category->id}}<br>
    name: {{$category->name}}<br>
    description: {{$category->description}}<br>

@endforeach

@endsection
</body>
</html>
