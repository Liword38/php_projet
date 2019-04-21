<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Récupère l'intégralité des posts en BD pour les passer à la vue 'articles'
    public function index(){
               $posts = \App\Post::all(); //get all posts

               return view('articles',array(
                    'posts' =>$posts
                 ));
             }
            
    //Récupère le post de nom '$post_name' en BD pour le passer à la vue 'posts/single'
     public function show($post_name) {
            $post = \App\Post::where('post_name',$post_name)->first(); //get first post with 'post_name' == $post_name
            $authors = \App\User::where('id',$post->post_author)->first();
            
            
            return view('posts/single',array( //Pass the post to the view
                    'post' => $post
                ),array(
                    'authors' => $authors
                ));
             }
             
}
