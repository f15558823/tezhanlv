<?php
class DB{
    public function __construct(){
        $pdo=new pdo('mysql:host=localhost;dbname=ceshi','root','');
    }
}