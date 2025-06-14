<?php

// Ce fichier contient et retourne un tableau avec toutes les routes des pages du projet

return [
    '/' => ['controller' => 'App\Controller\PagesController', 'action' => 'home'],
    '/home/' => ['controller' => 'App\Controller\PagesController', 'action' => 'home'],
    '/about/' => ['controller' => 'App\Controller\PagesController', 'action' => 'about']
];