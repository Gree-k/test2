<?php

spl_autoload_register(function($class){
    $str = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($str)) {
        include __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    }
});

include __DIR__ . '/vendor/autoload.php';
