<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost','root','','tienda_master');
        return $db;
    }
}