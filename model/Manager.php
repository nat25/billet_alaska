<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=billet_alaska;charset=utf8', 'root', '');
        return $db;
    }
}