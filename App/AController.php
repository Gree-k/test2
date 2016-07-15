<?php

namespace App;

use App\Exceptions\Error404;

abstract class AController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        if (method_exists(static::class, $methodName)) {
            return $this->$methodName();
        } else {
            throw new Error404('Неверный метод');
        }
    }
}