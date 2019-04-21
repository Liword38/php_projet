<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations. Crée la table 'posts' avec les attributs listés
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_author');
            $table->datetime('post_date');
            $table->string('post_content');
            $table->string('post_title');
            $table->string('post_name');
            $table->string('post_type');
            $table->string('post_category');
            $table->string('post_status');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations. Supprime la table 'posts'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
