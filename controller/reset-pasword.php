<?php
    // importamos la dependencias 
    require_once("../model/conexion.php");
    require_once("../model/reasignar-clave.php");

    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];

    $objetoRclave = new RecuperarClave();
    $result = $objetoRclave->resetearClave($identificacion,$email);

?>