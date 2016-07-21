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
        $this->view->temp = $this->view->render(__DIR__ . '/../templates/admin/news/index.php');
        $this->view->display(__DIR__ . '/../templates/adminPanel.php');
    }

    protected function actionForm()
    {
        if ($item = News::findById($_GET['id'])) {
            $this->view->article = $item;
        }

        $this->view->temp = $this->view->render(__DIR__ . '/../templates/admin/news/form.php');
        $this->view->display(__DIR__ . '/../templates/adminPanel.php');    }

    protected function actionSaveNews()
    {
        try {
            $article = new News();
            $article->fill($_POST);
            $article->save();
            $this->view->goTo('/Admin');
        } catch (Multi $e) {
            $_SESSION['errors']=$e;
            $this->view->goTo('/Admin/Form');
        }
    }

    protected function actionDeleteNews()
    {
        try {
            if($news = News::findById($_GET['id'])){
                $news->delete();
            } else {
                throw new \Exception('Ошибка удаления!');
            }

        } catch (\Exception $e) {
            $_SESSION['error'] = $e;
        }
        $this->view->goTo('/Admin');

    }
}