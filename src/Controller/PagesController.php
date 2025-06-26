<?php

namespace App\Controller;

use App\model\Repository\CategoryRepository;

class PagesController extends BaseController
{
    public function home(): void
    {
        $repo = new CategoryRepository();
        $categories = $repo->findAll();

        // echo('<pre>');
        //     var_dump($categories);
        // echo('</pre>');

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