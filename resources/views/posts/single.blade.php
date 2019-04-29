<!-- Vue affichant la page d'un article du blog -->
<!doctype <!DOCTYPE html>
@extends('layouts/main')
<html>
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    
   
</head>
<body>
<div class="content">
        <h2>{{ $post->post_title }}</h2>
            <div>
            {{ $post->post_content}}<br/><br/>
            </div>
            <ul>
            <li>Auteur(e): {{ $authors->name}}</li>
            <li>Date de publication: {{ $post->post_date}}</li>
            </ul>
               
            </div>
</body>
@endsection
</html>