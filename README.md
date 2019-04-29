## INSTALLATION

1) Dans le répertoire souhaité: `Git clone https://github.com/Liword38/php_projet.git`

2) Dans le répertoire racine: `composer install`

(Si des messages d'erreur du type `...ext-fileinfo * -> the requested PHP extension fileinfo is missing from your system.` aller dans le fichier 'php.ini' de la version php utilisée et décommenter la ligne `;extension=fileinfo` par exemple)

## BASE DE DONNEE

3) Créer le fichier 'database.sqlite' dans le répertoire 'database'

4) Dans la racine du projet: `php artisan migrate`

5) Dans le racine du projet: `php artisan db:seed`

## CONFIGURER L'ACCES A LA BASE

6) Renommer '.env.example' en '.env'

7) `php artisan key:generate`

8) Dans '.env' ligne 8: Changer `DB_CONNECTION=mysql` pour `DB_CONNECTION=sqlite`

9) Commenter les lignes 9 à 13 de '.env' --> symbole # en début de ligne

## INITIALISER LE CHAT

1) Créer un compte et une App sur Pusher.com

2) Dans '.env' modifier `BROADCAST_DRIVER=log` en `BROADCAST_DRIVER=pusher`

3) Récupérer les paramètres de l'App dans l'onglet "App Keys"

4) Remplir les paramètres PUSHER dans '.env', par exemple :  
`PUSHER_APP_ID="767658"`  
`PUSHER_APP_KEY="8e5a3f50fc6c74dd259a"`  
`PUSHER_APP_SECRET="2de1637d738a89b73da1"`  
`PUSHER_CLUSTER=eu`  
 (penser à ajouter le cluster qui n'est pas dans Laravel par défaut)

## DEMARRER LE SERVEUR

1) `php artisan serve`

2) Aller sur http://localhost:8000

## EXPLORER LA BD

1) Aller sur localhost:8000/phpliteadmin.php

2) Mot de passe: admin

## REROLL LES SEEDS DE LA BD

1) `php artisan migrate:refresh --seed`

## INITIALISATION DE SOCIALITE (IDENTIFICATION RÉSEAUX SOCIAUX)

1) S'il n'y a pas de répertoire Socialite dans vendor/laravel :
   - dans le répertoire racine `composer require laravel/socialite "~3.0"`
   - dans config/app.php ajouter la ligne `Laravel\Socialite\SocialiteServiceProvider::class,` dans le tableau ` 'provider' =>      [ ];` et `'Socialite' => Laravel\Socialite\Facades\Socialite::class,` dans le tableau `'aliaces'=> [ ];`.

2) Ajouter au fihier.env :  
  `GITHUB_ID=7c14a9d96110964fbb37`
`GITHUB_SECRET=18cf68a0e3dec65e419afb23ad6ff30c5c9e3da4`
`GITHUB_URL=http://localhost:8000/login/github/callback`

`FACEBOOK_ID=444515592779405`
`FACEBOOK_SECRET=ba020e34833a63ca1894c314fce42b51`
`FACEBOOK_URL=http://localhost:8000/login/facebook/callback`

3) Pour être autorisé à vous connecter via Facebook il faut accepter l'invitation à être utilisateur testeur sur l'application.

#Problème possible : 

Si votre certificat curl n'est pas à jour vous pouvez obtenir `cURL error 60` lors de l'authentification avec GitHub et Facebook. Pour le mettre à jour il faut suivre les instructions sur  https://docs.bolt.cm/3.6/howto/curl-ca-certificates pour télécharger cacert.pem . 
     
