<?php

    class validarSesion{

        public function iniciarSesion($email,$pass){

            // creamos el objeto conexion
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            // comparamos el email 
            $sql= "SELECT * FROM users WHERE email=:email";
            $result= $conexion->prepare($sql);

            $result->bindParam(":email",$email);

            $result ->execute();
            // validacion email
            if($f = $result->fetch() ) {
                // validamos clave
                if($pass == $f['clave']){

                    if($f['estado'] == "Activo"){
                        // creamos la variable inicio de secion
                        session_start();
                        $_SESSION['id']=$f['identificacion'];
                        $_SESSION['rol']=$f['rol'];
                        $_SESSION['email'] = $f['email'];
                        $_SESSION['clave'] = $f['clave'];
                        // se usa para el archivo de seguridad
                        $_SESSION['autenticado'] = "SI";

                        if($f['rol']=="administrador"){
                            echo '<script>alert("bienvenido admin")</script>';
                        echo "<script>location.href='../view/admin/homeAdmin.php'</script>"; 

                        }

                        if($f['rol']=="cliente"){
                            echo '<script>alert("bienvenido cliente")</script>';
                        echo "<script>location.href='../view/cliente/homeClient.php'</script>"; 

                        }

                        if($f['rol']=="vendedor"){
                            echo '<script>alert("bienvenido vendedor ")</script>';
                        echo "<script>location.href='../view/vendedor/homeVend.php'</script>"; 

                        }

                        
                    }else{
                        echo '<script>alert("su cuenta esta inactiva o bloqueada contacte al admi")</script>';
                        // echo "<script>location.href='../view/extras/register.php'</script>"; 
                    }


                }else{
                    echo '<script>alert("clave incorrecta ")</script>';
                    // echo "<script>location.href='../view/extras/register.php'</script>"; 
                }

            }else{
                echo '<script>alert("usuario no registrado , por favor registrese")</script>';
                // echo "<script>location.href='../view/extras/register.php'</script>"; 

            }
            

        }

        public function cerrarsesion(){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            session_start();
            session_destroy();
            echo "<script>location.href='../index.php'</script>";

        }
    }


?>