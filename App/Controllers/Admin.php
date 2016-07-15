<?php

namespace App\Controllers;

use App\AController;
use App\Exceptions\Multi;
use App\Models\News;

class Admin extends AController
{
    protected function actionIndex()
    {
        $this->view->news = \App\Models\News::findAll();
        $this->view->display('/news/default.twig', '/adminPanel.twig');
    }

    protected function actionForm()
    {
        if ($item = News::findById($_GET['id'])) {
            $this->view->article = $item;
        }
        if (!empty($_SESSION["errors"])) {
            $this->view->session = $_SESSION;
            unset($_SESSION['errors']);
        }
        $this->view->display('/news/form.twig', '/adminPanel.twig');
    }

    protected function actionSaveNews()
    {
        try {
            $article = new News();
            $article->fill($_POST);
            $article->save();
            $this->view->goTo('/Admin');
        } catch (Multi $e) {
//            $this->view->errors = $e;
            $_SESSION['errors']=$e;
            $this->view->goTo('/Admin/Form');
//            $this->actionForm();
        }
    }

    protected function actionDeleteNews()
    {
        try {
            if($news = News::findById($_GET['id'])){
                $news->delete();
//                $this->actionIndex();
            } else {
                throw new \Exception('Ошибка удаления!');
            }

        } catch (\Exception $e) {
//            $this->view->errors = $e;
            $_SESSION['error'] = $e;
        }
        $this->view->goTo('/Admin');
//        $this->view->toAdmin();
//        $this->actionIndex();
    }
}