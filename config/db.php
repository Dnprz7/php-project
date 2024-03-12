<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost','admin','admin','tienda_master');
        return $db;
    }
}