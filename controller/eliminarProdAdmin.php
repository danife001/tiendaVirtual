<?php

    require_once('../model/conexion.php');
    require_once('../model/consultasP.php');

    if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];
        $objetosConsultas = new consultasP();
        $result= $objetosConsultas->eliminarUser($id_user);
    }



?>