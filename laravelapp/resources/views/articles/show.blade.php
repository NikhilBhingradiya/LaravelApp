
@extends('pages.master')

@section('content')

<h1> Article #{{$article->id}}</h1>


Name: {{$article->name}}<br>
Body: {{$article->body}}<br>
Category ID: {{$article->category_id}}<br><br>
Author ID: {{$article->author_id}}<br><br>

<h1>Catogory</h1>
@foreach($article->categories as $category)
    id :{{$category->id}}<br>
    name: {{$category->name}}<br>
    description: {{$category->description}}<br>

@endforeach



@endsection




