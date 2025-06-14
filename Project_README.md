# Projet PHP POO MVC

Cette procédure explique comment créer et structure un projet en PHP "_VANILLA_" en implémentant le patron de conception MVC et permet d'apréhender le fonctionnement du cadre de developpement Symfony ; à ceci prêt que Symfony ne crée pas de sous dossier "**model**" dans son arborescence

## Prerequis :
- Un IDE (_pour l'édition du code_)
  - Extension pour IDE "**PHP Intelephense**" de **Ben Mewburn**
- Git (_pour le versionnage_)
- Pile ou stack serveur
  - Un serveur Web (_ex. Apache 2_)
  - Un SGBDR (_ex. MySQL_)
  - PHP
  - Composer
- Tailwind

_Nota : la pile technique, c'est à dire les serveurs de développement et rendu peuvent être soit "**Dockérisées**", soit installées directement **sur le système hôte** ou installées en utilisant l'une des solutions packagées **WAMPP**, **MAMPP** ou **XAMPP**_

## Arborescence (_mettant en évidence le patron de conception_):
```
mon_projet
├── config => Contient divers fichiers utiles au projet
├── public => Contient les éléments qui seront servis sur le site web
├── README.md => Ce fichier
├── src => Contient le code source de notre application
│   ├── Controller => Controller
│   └── model => Model
│       ├── Entity
│       └── Repository
└── vue => Vue
    └── tempplates
        └── pages
```
_Attention **!!!** : Créer l'arborescence et se positionner à la racide du projet_

## Création du système d'autoload pour bénéficier des "espaces de noms" (namespace) pour nos classes
1. Créer (_à la racine du projet_) un fichier nommé "composer.json" pour définir le namespace en PSR-4
```
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```
2. Depuis un terminal créer ou mettre à jour l'autoloader (_à proprement parler_)
- ```composer dump-autoload```

3. Dans le dossier public créer le fichier index.php qui servira de point d'entré au programme et importer l'autoloader
- ```<?php require_once __DIR__ . "/../vendor/autoload.php";```

4. Configurer la redirection des pages selon votre serveur Web (**ex. Apache**)
    - Créer un fichier .htaccess dans le dossier public (_au même niveau que le fichier **index.php**  avec vos règles de ré-écriture_)
        - RewriteEngine On<br>RewriteBase \/<br><br>RewriteRule \^ index.php [QSA,L]

5. Créez votre base des données avec ses tables et leurs relations

6. Commencez à coder en respectant autant que possible le patron, c'est à dire les classes du **MODÈLE** dans leurs dossiers respectfis, les classes **CONTRÔLEURS** dans son namespace et de même pour les classes servant à génrer les pages web c'est à dire la **VUE**