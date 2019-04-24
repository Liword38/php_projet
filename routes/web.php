<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Redirige sur la page d'accueil de l'application
Route::get('/', 'HomeController@index');

//Affiche le formulaire de contact ou la page de remerciement après envoi du formulaire et validation + enregistrement des données
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

//Affiche l'intégralité des articles
Route::get('/articles','PostsController@index');

//Affiche un seul article dont le nom est dans l'URL
Route::get('/articles/{post_name}', 'PostsController@show');

//vérifie l'authentification lors de l'utilisation d'une route
Auth::routes();


//Redirige sur la vue du Chat
Route::get('/chat', 'ChatsController@index');

//Permet d'envoyer et de recevoir des messages dans le Chat
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');
