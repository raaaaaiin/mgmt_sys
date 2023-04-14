<?php
spl_autoload_register(function($className) {
    $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $className) . '.php';
    
    var_dump($path);var_dump(file_exists($path));
    
    if (file_exists($path)) {
        var_dump("included");    
    echo '<br><br><br><br><br>';
        require($path);
        
    }
});