# Pile (_stack_) de Développement php

Ce projet sert à mettre en place une pile de développement utilisant plusieurs micro-services via Docker.<br> 
Vous y trouverez les services suivant Nginx, PHP, MySQL et MongoDB ainsi que PHPMyAdmin et Mongo-Express qui sont des outils de gestion graphiques pour ces bases de données.

_Ce projet a été fortement inspiré du tutoriel de Bhagwatchouhan du 13 décembre 2021_

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [Docker](https://www.docker.com/) (_version 20.10 ou supérieure recommandée_)
- [Docker Compose](https://docs.docker.com/compose/)

## Arborescence du projet

L'arborescence suivante est nécessaire pour que la pile fonctionne correctement :

```
dossier-project/
├── docker/
│   ├── nginx/
│   │   ├── Dockerfile
│   │   └──  helloworld.nginx.conf
│   ├── php/
│   │   └── Dockerfile
├── logs/
│   └── nginx/
│   │   ├── access.log
│   │   └── error.log
├── src/
│   └── index.php
├── database/
│   ├── mysql/
│   ├── mongodb/
│   │   ├── db/
│   │   ├── dev.archive/
│   │   └── production/
├── docker-compose.yaml
```

- **docker/** : _Contient les dossiers pour les services Nginx et PHP._
- **logs/nginx/** : _Répertoire pour les logs du serveur web Nginx._
- **src/** : _Répertoire racine pour le code source de l'application._
- **database/mysql/** : _Répertoire pour les données MySQL._
- **database/mongodb/** : _Répertoires pour les données MongoDB et leurs archives._
- **docker-compose.yaml** : _Fichier de configuration principal pour Docker Compose._

## Services inclus

1. **Nginx**
2. **PHP**
3. **MySQL**
4. **phpMyAdmin**
5. **MongoDB**
6. **Mongo-Express**

## Installation et démarrage

1. Clonez ce dépôt ou copiez les fichiers nécessaires dans un répertoire local.
2. Assurez-vous que l'arborescence du projet correspond à celle mentionnée plus haut.
3. Lancez l'application Docker Desktop.
4. Construisez et démarrez les conteneurs en exécutant :

```bash
sudo docker-compose up --build -d
```

4. Accédez aux services via un navigateur web grâce à leurs ports respectifs :
   - Application web : [http://localhost:8000](http://localhost:8000)
   - phpMyAdmin : [http://localhost:8888](http://localhost:8888) (_identifiants_ : **helloworld**)
   - Mongo-Express : [http://localhost:8181](http://localhost:8181) (_identifiants_ : **mexpress**)

## Variables d'environnement

Les variables d'environnement importantes utilisées dans cette configuration sont :

- **MySQL**
  - `MYSQL_ROOT_PASSWORD`: Mot de passe du super-utilisateur MySQL.
  - `MYSQL_DATABASE`: Nom de la base de données par défaut.
  - `MYSQL_USER`: Utilisateur MySQL.
  - `MYSQL_PASSWORD`: Mot de passe de l'utilisateur MySQL.

- **MongoDB**
  - `MONGO_INITDB_ROOT_USERNAME`: Nom d'utilisateur pour MongoDB.
  - `MONGO_INITDB_ROOT_PASSWORD`: Mot de passe pour MongoDB.

- **Mongo-Express**
  - `ME_CONFIG_MONGODB_ADMINUSERNAME`: Nom d'utilisateur MongoDB Admin.
  - `ME_CONFIG_MONGODB_ADMINPASSWORD`: Mot de passe MongoDB Admin.
  - `ME_CONFIG_BASICAUTH_USERNAME`: Nom d'utilisateur pour Mongo-Express.
  - `ME_CONFIG_BASICAUTH_PASSWORD`: Mot de passe pour Mongo-Express.

## Arrêt de la pile

Pour arrêter et supprimer tous les conteneurs, exécutez :

```bash
docker-compose down
```

## Logs

Les logs des services sont disponibles dans les répertoires respectifs :
- **Nginx** : `logs/nginx`
- **MySQL et MongoDB** : Stockés dans leurs volumes respectifs sous `database/`.

 **_J'espère que cette pile de services de base vous sera utile_**
