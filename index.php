<?php


define('PATH_DIR', '');
require_once('controller/Controller.php');
require_once('library/RequirePage.php');
require_once __DIR__ . '/vendor/autoload.php';
require_once('library/Twig.php');

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$handledRequest = false;

if ($url == '/') {
    require_once('controller/ControllerHome.php');
    $controller = new ControllerHome;
    echo $controller->index();
    $handledRequest = true;
} else {
    $requestURL = $url[0];
    $requestURL = ucfirst($requestURL);
    $controllerPath = __DIR__ . "/controller/Controller" . $requestURL . ".php";

    if (file_exists($controllerPath)) {
        require_once($controllerPath);
        $controllerName = 'Controller' . $requestURL;
        $controller = new $controllerName;
        if (isset($url[1])) {
            $method = $url[1];
            if (isset($url[2])) {
                echo $controller->$method($url[2]);
                $handledRequest = true;
            } else {
                echo $controller->$method();
                $handledRequest = true;
            }
        } else {
            echo $controller->index();
            $handledRequest = true;
        }
    }
}



// https://packagist.org/packages/rakit/validation

?>

