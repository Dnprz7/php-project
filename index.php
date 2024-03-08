<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


if ($_GET['controller']) {
    $controllerName = $_GET['controller'] . 'Controller';
} else {
    echo 'La pagina no existe';
    exit();
}

if (isset($controllerName) && class_exists($controllerName)) {

    $controller = new $controllerName();

    if ($_GET['action'] && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        echo 'La pagina no existe';
    }
} else {
    echo 'La pagina no existe';
}
require_once 'views/layout/footer.php';