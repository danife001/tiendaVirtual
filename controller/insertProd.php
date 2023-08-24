<?php
    // enlazar dependencias conexion y consultas
    require_once("../model/conexion.php");
    require_once("../model/consultasP.php");

    // capturamos valores enviados desde el formulario 
    // se captura por post y los names 

    $serie = $_POST['serie'];
    $nombreP = $_POST['nombreP'];
    $fotoP = $_POST['fotoP'];
    $descrip = $_POST['descrip'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // cambios para cargar imagen 


    //definimos el peso limite de las img y los formatos permitidos

    define('LIMITE', 2000);
    define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/jpeg', 'image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);

    // validamos que el archivo si haya sido seleccionado 

    if ($_FILES['fotoP']['error'] > 0) {


        echo '<script>alert("archivo dañado , por favor seleccione otra imagen")</script>';
        echo "<script>location.href='../view/admin/registrarUser.php'</script>";
    }                            
    else {
// validamos formatos de imagen y peso

        if (in_array($_FILES['fotoP']['type'], $PERMITIDOS) && $_FILES['fotoP']['size'] <= LIMITE * 1024) {

            // capturamos la ruta y donde quedara alojada la imagen

            $fotoP = "../upload/perfil/".$_FILES['fotoP']['name'];

            //movemos el archivo a la ruta definida anteriormente 
            $result = move_uploaded_file($_FILES['fotoP']['tmp_name'], $fotoP);


        // validar campos obligatorios
        if(strlen($serie)>0 && strlen($nombreP)>0 && strlen($fotoP)>0 && strlen($descrip)>0 && strlen($precio)>0 && strlen($cantidad)) {
            // validar contraseñas
            
                // con md5 se incripta la contraseña
            
                // creamos un objeto de la clase consultasE
                $objetoConsultas = new ConsultasP();
                //  enviamos los argumentos a la funcion registarUserE

                $result = $objetoConsultas->registrarProd($serie,$nombreP,$fotoP,$descrip,$precio,$cantidad);

            
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