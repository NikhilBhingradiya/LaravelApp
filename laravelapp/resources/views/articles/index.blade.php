@extends('pages.master')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1> All Articles</h1>
@foreach($articles as $article)

    ID: {{$article->id}}<br>
Name: {{$article->name}}<br>
Body: {{$article->body}}<br>
Category ID: {{$article->category_id}}<br>
Author ID: {{$article->author_id}}<br>
@endforeach
</body>
</html>
