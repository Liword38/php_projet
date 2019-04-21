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
    <script src="main.js"></script>
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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