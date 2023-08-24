<?php

    require_once("../model/conexion.php");
    require_once("../model/validarSesion.php");

    $email = $_POST['email'];
    $pass = md5($_POST['pass']);


    $objetoConsultas = new validarSesion();
    $result = $objetoConsultas->iniciarSesion($email,$pass);
?>