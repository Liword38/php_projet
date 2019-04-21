<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Récupère les 3 derniers posts enregistrés pour les passer à la vue d'accueil
    public function index() {
        $posts = \App\Post::where('post_type','article') //Get 3 latests posts
                       ->latest('post_date')
                       ->take(3)
                       ->get();

        //Renvoie la vue d'acueil         
        return view('welcome',array(
            'posts' =>$posts
        ));
    }
}
