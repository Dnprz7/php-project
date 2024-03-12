<?php 
    function controllers_autoload($class){
     
        $classname = 'controllers/' . $class . '.php';
     
        if (file_exists($classname)) {
            require $classname; 
        }
    }
     
    spl_autoload_register('controllers_autoload');
