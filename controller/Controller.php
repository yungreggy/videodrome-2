<?php

abstract class Controller {
    abstract public function index();

    public function error404($message = 'La page que tu cherches n\'est pas disponible.')
    {
        header("HTTP/1.0 404 Not Found");
        echo Twig::render('error.php', ['message' => $message]);
    }


}




?>