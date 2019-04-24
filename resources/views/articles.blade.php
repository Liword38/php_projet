<!-- Vue référençant tous les articles du blog -->
@extends('layouts.main')
<html>
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
</head>
<body>
<div class="content">
        <h2>Tous nos articles:</h2>
            <ol>
            <!-- Affiches tous les articles passés à la vue dans la variable $posts -->
                @foreach ( $posts as $post )
                
                     <!-- Les articles sont des liens renvoyant sur 'http://localhost:8000/articles/nom_d'article' -->
                    <li><a href ="{{ url('articles/'.$post->post_name) }}"> {{ $post->post_title }} - {{ $post->post_date }}</a></li>

                @endforeach
            </ol>
               
            </div>
</body>
@endsection
</html>