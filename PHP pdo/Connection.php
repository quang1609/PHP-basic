<?php
 class Connection
 {
    public static function getConnect()
    {
        $conn = new PDO('mysql:host=db;dbname=quangpi', 'user1', 'root');
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $conn;
    }
 } 
?>
