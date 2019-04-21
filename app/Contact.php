<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Définit la table associée au modèle comme 'contact' et non 'contacts' par défaut
    protected $table = 'contact';

    //Annule l'enregistrement de la date de création d'un contact (car la table possède déjà un attribut 'contact_date')
    public $timestamps = false;
}
