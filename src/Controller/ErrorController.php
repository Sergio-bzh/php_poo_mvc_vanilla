<?php

namespace App\Controller;

class ErrorController extends BaseController
{
    public function show(string $errorMessage): void
    {
        $this->render('errors/default.php', [
            'errorMessage' => $errorMessage
        ]);
    }
}