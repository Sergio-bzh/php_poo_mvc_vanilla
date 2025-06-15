# POO : Créer un site d'offres d'emploi en PHP avec le patron de conception MVC

Ce projet a pour but d'apréhender la POO en PHP en utilisant le "Design Pattern" MVC et peut servir d'introduction afin de comprendre le fonctionnement d'un cadre de travail (_framework_) tel que Symfony et "_voir_" ce qui se cache derrière la "**magie**" de ce dernier.

Pour suivre cette série de lives, j'ai chosi de "_conteneuriser_" ma "_stack_" de développement avec **Docker** et d'ajouter un conteneur MongoDb pour m'amuser plus tard avec une ou deux collections.

## Nota :
_J'ai implémenté et testé cette stack le dimanche 15 juin après avoir regardé le 3ème live de la série et j'ai testé son fonctionnement sur Ubuntu, Mac (M1) et Windows 11._

## Prerequis :
- Un IDE (_pour l'édition du code_)
  - Extension pour IDE "**PHP Intelephense**" de **Ben Mewburn**
- Git (_pour le versionnage_)
- PHP
- Composer
- [Docker](https://www.docker.com/) (_version 20.10 ou supérieure recommandée_)
- [Docker Compose](https://docs.docker.com/compose/)

    - **Conteneurs de la stack :**
        - Web (_nginx_)
        - PHP
        - SGBDR (_MySQL_)
            - Interface graphique de gestion (_PHP My Admin_)
        - SGBD NoSQL (_MongoDB_)
            - Interface graphique de gestion (_Mongo Express_)

## Installation du projet sur votre poste local :
- Ouvrez un terminal ou invite de commandes (_bash, zsh, gitbash, cmd ou powershell_)
- Clonez le projet : 
    - ```git clone https://github.com/Sergio-bzh/php_poo_mvc_vanilla.git```
- Positionnez vous dans le dossier du projet :
    - ```cd php_poo_mvc_vanilla```
- Mettez à jour le système d'auto-load :
    - ```composer dump-autoload```
- Lancez ou assurez vous que Docker (_Desktop ou daemon_) est en cours d'exécution.
- Instanciez votre pile de développement :
    - ```docker compose up --build```
- Vérifiez votre stack :
    - ```docker ps```
- Testez vos services :
    - Service web avec un navigateur internet sur ```localhost:8000```
    - Service de bases de données relationnelles via PHP MyAdmin ```localhost:8888``` credentials ```helloworld```
    - Service de bases de données orientée document (_MongoDB_) via MongoExpress ```localhost:8181``` credentials ```mexpress```

J'espère que ce petit projet vous sera utile pour suivre cette série lives (_ou replays_) d'Anthony LAPLANE