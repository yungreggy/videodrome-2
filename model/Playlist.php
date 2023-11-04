<?php

class Playlist extends CRUD {

    protected $table = 'playlist';
    protected $primaryKey = 'id';

    protected $fillable = ['nom_playlist', 'description'];
}



?>

