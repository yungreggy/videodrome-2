<?php

class RequirePage {

    static public function model($model){
        return require_once('model/'.$model.'.php');
    }

    static public function header($title){
        return '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="../assets/css/styls.css">
            </head>
            <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Films</a></li>
                <li><a href="#">Genres</a></li>
                <li><a href="#">Realisateurs</a></li>
                <li><a href="#">Playlists</a></li>
            </ul>
        </nav>
        ';
    }
    static public function url($url){
        header('location:'.PATH_DIR.$url);
    }
}


?>