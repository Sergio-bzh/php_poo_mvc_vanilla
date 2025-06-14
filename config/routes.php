<?php

// Ce fichier contient et retourne un tableau avec toutes les routes des pages du projet

return [
    '/' => ['controller' => 'App\Controller\HomeController', 'action' => 'home'],
    '/home' => ['controller' => 'App\Controller\HomeController', 'action' => 'accueil'],
    // "/home/" => ["controller" => "App\Controller\HomeController", "action" => "home"],
];