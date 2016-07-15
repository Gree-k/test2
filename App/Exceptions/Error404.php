<?php

namespace App\Exceptions;

use App\View;

class Error404 extends \Exception
{
    public function pageNotFound()
    {
        $view = new View();
//        $view->data = $view->render(__DIR__ . '/../templates/exceptions/error404.twig');
        $view->display('/exceptions/error404.twig');
    }
}