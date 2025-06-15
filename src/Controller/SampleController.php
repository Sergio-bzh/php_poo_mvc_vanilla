<?php

namespace App\Controller;

class SampleController extends BaseController
{
    public function show(): void
    {
        $this->render('pages/sample.php', []);
    }

    public function add(): void
    {
        $this->render('pages/sample_form.php', []);
    }
}