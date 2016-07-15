<?php

namespace App\Exceptions;

use App\Mailer;
use App\View;

class Db extends \Exception
{
    public function errorPage()
    {
        $view = new View();
//        $view->data = $view->render(__DIR__ . '/../templates/exceptions/db.twig');
        $view->display('/exceptions/db.twig');
    }

    public function report()
    {
        $mail = new Mailer();
        $mail->messageToAdmin('Error', $this->getMessage());
        $mail->send();
    }
}