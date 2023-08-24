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

    // cambios para cargar imagen 


    //definimos el peso limite de las img y los formatos permitidos

    define('LIMITE', 2000);
    define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/jpeg', 'image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);

    // validamos que el archivo si haya sido seleccionado 

    if ($_FILES['foto']['error'] > 0) {


        echo '<script>alert("archivo dañado , por favor seleccione otra imagen")</script>';
        echo "<script>location.href='../view/admin/registrarUser.php'</script>";
    }                            
    else {
// validamos formatos de imagen y peso

        if (in_array($_FILES['foto']['type'], $PERMITIDOS) && $_FILES['foto']['size'] <= LIMITE * 1024) {

            // capturamos la ruta y donde quedara alojada la imagen

            $foto = "../upload/perfil/".$_FILES['foto']['name'];

            //movemos el archivo a la ruta definida anteriormente 
            $result = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);


        // validar campos obligatorios
        if(strlen($identificacion)>0 && strlen($tipoDoc)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($telefono)>0 && strlen($email)>0 && strlen($clave)>0  && strlen($rol)>0 && strlen($estado)>0) {
            // validar contraseñas
            
                // con md5 se incripta la contraseña
                $passmd = md5($clave);
                // creamos un objeto de la clase consultasE
                $objetoConsultas = new ConsultasA();
                //  enviamos los argumentos a la funcion registarUserE

                $result = $objetoConsultas->registrarUser($identificacion,$tipoDoc,$nombres,$apellidos,$email,$telefono,$passmd,$rol,$estado, $foto);

            
        }else{
            echo '<script>alert("por favor complete todo el formulario")</script>';
            echo "<script>location.href='../view/extras/register.php'</script>";

        }


        }
        else {

            echo '<script>alert("formato de imagen no permitido o tamaño de archivo excedio el limite")</script>';
            echo "<script>location.href='../view/admin/registrarUser.php'</script>";
        }

    }


        










?>