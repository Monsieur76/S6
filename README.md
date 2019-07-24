# Snowtrick
## Install

### Dans le fichier .env
1. Dans DATABASE URL placer votre url de database.
2. Pour configurer l'envoie de mail remplacer dans MAILER_URL. 
3. Télécharger les dépendences de composer.

### Avant de mettre le site en ligne 
* Configurer le fichier .env
* Taper la commande `php bin/console d:d:c` cela va créer la base de donné.
* Faire la commande `php bin/console m:m` pour la migration.
* Puis finir par la commande `php bin/console d:m:m` pour copier votre migration dans la base de donnée.
* Mettre 2 photo dans le dossier public/img/upload et nommer les "default.jpeg" pour les photo utilisateur et snow.jpg pour les photos de figure.
* Lancer les fixtures avec la commande `php bin/console d:f:l` si vous voulez faire des tests.
* Faire vos tests.


[![Maintainability](https://api.codeclimate.com/v1/badges/70ae098e35c31eaae3d1/maintainability)](https://codeclimate.com/github/Monsieur76/S6/maintainability)

Le modèle qui a été le plus utilisé a été https://trello.com/b/zDBX4Rgv/s6 pour aider a la réalisation.
