<?php

    require_once('../model/conexion.php');
    require_once('../model/consultasA.php');

    if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];
        $objetosConsultas = new consultasA();
        $result= $objetosConsultas->eliminarUser($id_user);
    }



?>