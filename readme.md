## INSTALLATION

1) Dans le répertoire souhaité: 'Git clone https://github.com/Liword38/php_projet.git'

2) Dans le répertoire racine: 'php composer install'

## BASE DE DONNEE

3) Créer le fichier 'database.sqlite' dans le répertoire 'database'

4) Dans la racine du projet: 'php artisan migrate'

5) Dans le racine du projet: 'php artisan db:seed'

## CONFIGURER L'ACCES A LA BASE

6) Renommer '.env.example' en '.env'

7) Dans '.env' ligne 8: Changer 'DB_CONNECTION=mysql' pour 'DB_CONNECTION=sqlite'

8) Commenter les lignes 9 à 13 de '.env' --> symbole # en début de ligne

## EXPLORER LA BD

1) Aller à http://localhost:8000/phpliteadmin.php

2) Mot de passe: admin

## Reroll les seeds de la BD

1) 'php artisan migrate:refresh --seed'
