<?php
    // enlazar dependencias conexion y consultas
    require_once("../model/conexion.php");
    require_once("../model/consultasA.php");

    // capturamos valores enviados desde el formulario 
    // se captura por post y los names 

    $identificacion = $_POST['identificacion'];
    $tipoDoc = $_POST['tipoDoc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['identificacion'];
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];
    // validar campos obligatorios
    if(strlen($identificacion)>0 && strlen($tipoDoc)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($telefono)>0 && strlen($email)>0   && strlen($rol)>0 && strlen($estado)>0) {
        // validar contraseñas
        
            // con md5 se incripta la contraseña
            // $passmd = md5($clave);
            // creamos un objeto de la clase consultasE
            $objetoConsultas = new ConsultasA();
            //  enviamos los argumentos a la funcion registarUserE

            $result = $objetoConsultas->actualizarUser($identificacion,$tipoDoc,$nombres,$apellidos,$email,$telefono,$rol,$estado);

        
    }else{
        echo '<script>alert("por favor complete todo el formulario")</script>';
        echo "<script>location.href='../view/admin/verUser.php'</script>";
    }


?>