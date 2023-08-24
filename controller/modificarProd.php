<?php
    // enlazar dependencias conexion y consultas
    require_once("../model/conexion.php");
    require_once("../model/consultasP.php");

    // capturamos valores enviados desde el formulario 
    // se captura por post y los names 

    $serie = $_POST['serie'];
    $nombreP = $_POST['nombreP'];
    
    $descrip = $_POST['descrip'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    // validar campos obligatorios
    if(strlen($serie)>0 && strlen($nombreP)>0 &&   strlen($descrip)>0 && strlen($precio)>0 && strlen($cantidad)>0   ) {
        // validar contraseñas
        
            // con md5 se incripta la contraseña
            // $passmd = md5($clave);
            // creamos un objeto de la clase consultasE
            $objetoConsultas = new consultasP();
            //  enviamos los argumentos a la funcion registarUserE

            $result = $objetoConsultas->actualizarProd($serie,$nombreP,$descrip,$precio,$cantidad);

        
    }else{
        echo '<script>alert("por favor complete todo el formulario")</script>';
        echo "<script>location.href='../view/prod/verProd.php'</script>";
    }


?>