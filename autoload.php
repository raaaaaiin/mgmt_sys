<?php
spl_autoload_register(function($className) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    var_dump($path);
    if (file_exists($path)) {
        require_once($path);
        var_dump("Pasok");
    }
});