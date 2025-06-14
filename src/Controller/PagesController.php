<?php

namespace App\Controller;

class PagesController extends BaseController
{
    public function home(): void
    {
        $greetings = 'Hello';
        $name = 'John';

        $this->render('pages/home.php', [
            'greetings' => $greetings,
            'name' => $name
        ]);
    }

    public function about(): void
    {
        $greetings = 'Hello';
        $name = 'Doe';

        $this->render('pages/about.php', [
            'greetings' => $greetings,
            'name' => $name
        ]);
    }
}