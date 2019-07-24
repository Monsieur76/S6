# Snowtrick
## Install

### Le fichier .env
1. Mettez votre url de host à la place de localhost
2. Mettez votre nom de base de donné a la place de DATABASE_URL par défaut ne toucher a rien. 
3. Mettez votre nom de base de donné à la place de DATABASE_URL. 
4. Mettez votre mot de pass de votre de base de donné à la place de DATABASE_URL. 
5. Pour configurer l'envoie de mail remplacer dans MAILER_URL. 
6. ATTENTION si vous ne vous n’êtes pas connaisseur, ne toucher a rien.

### Avant de mettre le site en ligne 
* Configurer le fichier .env
* Taper la commande `php bin/console d:d:c` cela va créer la base de donné
* Faire la commande `php bin/console m:m`
* Puis finir par la commande `php bin/console d:m:m`
* Mettre 2 photo dans le dossier public/img/upload et nommer les "default.jpeg" pour les photo utilisateur et snow.jpg pour les photos de figure
* Lancer les fixtures avec la commande `php bin/console d:f:l` 
* Faire vos tests


[![Maintainability](https://api.codeclimate.com/v1/badges/70ae098e35c31eaae3d1/maintainability)](https://codeclimate.com/github/Monsieur76/S6/maintainability)

Le modèle qui a été le plus utilisé a été https://trello.com/b/zDBX4Rgv/s6 pour aider a la réalisation.
