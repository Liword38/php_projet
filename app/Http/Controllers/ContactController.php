<?php
namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{

//Crée un nouveau formulaire de contact
public function create()
{   //Récupère les contacts déjà enregistrés en DB pour les passer à la vue
    $contacts = \App\Contact::all(); 

    return view('contact',array(
        'contacts' =>$contacts
    ));
}


//Enregistre un nouveau contact en DB avec les éléments du formulaire et la date d'enregistrement
public function store(ContactRequest $request)
{
    $contact = new Contact;
    $contact->contact_name = $request->contact_name;
    $contact->contact_email = $request->contact_email;
    $contact->contact_message = $request->contact_message;
    $contact->contact_date = date("Y-m-d H:i:s");

    $contact->save();

    //Retourne la vue de confirmation d'envoi de formulaire valide
return view('confirm');
}
}