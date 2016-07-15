<?php
require __DIR__ . '/autoload.php';
session_start();
//error_reporting(E_ALL);


$controller = 'News';
$action = 'Index';

try {
    if ($_SERVER['REQUEST_URI'] != '/') {

        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_parts = explode('/', trim($url, ' /'));

        switch (count($uri_parts)) {
            case 0:
                break;
            case 1:
                $controller = array_shift($uri_parts);
                break;
            default:
                $controller = array_shift($uri_parts);
                $action = array_shift($uri_parts);
                break;
        }

        if (count($uri_parts) % 2) {
            throw new \App\Exceptions\Error404('Страница не найдена');
        }else{
            for ($i=0; $i < count($uri_parts); $i++) {
                $_GET[strtolower($uri_parts[$i])] = $uri_parts[++$i];
            }
        }

    }

    $controller='\App\Controllers\\' . ucfirst(strtolower($controller));
    if (class_exists($controller)) {
        $controller = new $controller;
        $controller->action(ucfirst(strtolower($action)));
    } else {
        throw new \App\Exceptions\Error404('не правильный контроллер');
    }

} catch (\App\Exceptions\Error404 $e) {
    $e->pageNotFound();
} catch (\App\Exceptions\Db $e){
    $e->errorPage();
}


//\PHP_Timer::stop();
//echo \PHP_Timer::resourceUsage();


//$controller= $_GET['ctrl'] ?: 'news';
//$action=$_GET['act'] ?: 'Index';
//
//
//$controller='\App\Controllers\\' . $controller;
//$controller = new $controller;
//$controller->action($action);
