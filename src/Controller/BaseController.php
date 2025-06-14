<?php

namespace App\Controller;

class BaseController
{
    protected function render(string $page_path, array $params = []): void
    {
        $file_path = APP_ROOT."/vue/templates/$page_path";
        if(!file_exists($file_path)){
            echo("Le fichier $file_path n'existe pas");
        } else {
            // la fonctiong extract() transforme chaque clef du tableau en variable utilisable dans les templates de rendu
            extract($params);
            require_once $file_path;
        }
    }
}