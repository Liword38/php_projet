<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations. Crée la table 'contact' avec les attributs listés.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_message');
            $table->datetime('contact_date');
        });
    }

    /**
     * Reverse the migrations. Supprime la table 'contact'.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
