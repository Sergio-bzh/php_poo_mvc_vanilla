<?php

namespace App\Controller;

class HomeController extends BaseController
{
    public function home(): void
    {
        $greetings = 'Hello';
        $name = 'John';

        $this->render('pages/home', [
            'greetings' => $greetings,
            'name' => $name
        ]);
    }

    public function accueil(): void
    {
        $greetings = 'Hello';
        $name = 'Doe';

        $this->render('pages/home', [
            'greetings' => $greetings,
            'name' => $name
        ]);
    }
}