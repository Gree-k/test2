<?php

namespace App\Controllers;

use App\AController;
use App\Exceptions\Error404;

class News extends AController
{
    protected function actionIndex()
    {
        $this->view->news = \App\Models\News::findAll();
        $this->view->display('/news/default.twig');
    }

    protected function actionOne()
    {
        $data = \App\Models\News::findById($_GET['id']);
        if (!empty($data)) {
            $this->view->article = $data;
            $this->view->display('/news/one.twig');
        } else {
            throw new Error404('Страница не найдена.');
        }
    }

    /**
     * Test Generator
     */
    protected function actionAllGen()
    {
        $this->view->news = \App\Models\News::findAllGenerator();
        $this->view->temp = $this->view->render(__DIR__ . '/../templates/news/index.php');
        $this->view->display(__DIR__ . '/../templates/main.php');
    }

}