<!-- Vue de la page d'accueil affichant les 3 derniers posts du blog -->
<!doctype html>
@extends('layouts/main')
@section('content')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>

        <div class="content">
        <h2>Les 3 derniers articles du blogs:</h2>
            <ol>
                <!-- Affiches tous les articles passés à la vue dans la variable $posts (ici uniquement 3 articless) -->
                @foreach ( $posts as $post )

                     <!-- Les articles sont des liens renvoyant sur 'http://localhost:8000/articles/nom_d'article' -->
                    <li><a href ="{{ url('articles/'.$post->post_name) }}"> {{ $post->post_title }} - {{ $post->post_date }}</a></li>

                @endforeach
            </ol>

            </div>
        </div>
    </body>
</html>
@endsection
