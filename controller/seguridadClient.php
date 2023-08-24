<?php
    session_start();

    if(!isset($_SESSION['autenticado'])){
        echo '<script>alert("atencion debes iniciar sesion")</script>';
                        echo "<script>location.href='../extras/login.php'</script>"; 

    }
    // se valida si el rol es el de la adminitrador 
    if($_SESSION['rol']!="cliente"){
        echo '<script>alert("su rol no le permite acceder a esta interfaz")</script>';
        echo "<script>location.href='../extras/login.php'</script>"; 
    }


?>