<?php


class Conexion{

    public function get_conexion(){
        $user = "root";
        $pass ="1234";
        $host="localhost";
        $db ="acai";

        $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
        
        
        return $conexion;

    }



}

?>