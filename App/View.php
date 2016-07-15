<?php

namespace App;


use Twig_Environment;
use Twig_Loader_Filesystem;

class View
{
    use TSetGet;

    protected $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
        $this->twig = new Twig_Environment($loader, array(
            'cache'       => 'App/templates/compilation_cache',
            'auto_reload' => true
        ));
    }

    public function display($template, $cont = '/default.twig')
    {
        $this->temp = $template;
        echo $this->twig->render($cont, $this->data);
    }

//    public function display($template)
//    {
//        echo $this->render($template);
//    }
//
//    public function render($template)
//    {
//        ob_start();
//        foreach ($this->data as $k => $v) {
//            $$k = $v;
//        }
//        include $template;
//        $content = ob_get_contents();
//        ob_end_clean();
//        return $content;
//    }


    public function goTo($uri)
    {
        header('Location: ' . $uri);
        die;
    }

}