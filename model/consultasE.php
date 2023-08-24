<?php

    class ConsultasE{

        public function registrarUserE($identificacion,$tipoDoc,$nombres,$apellidos,$email,$telefono,$passmd,$rol,$estado){
            
            // primero validar que no exista el mismo usuario

            // creamos objeto conexion
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            //consultamos los valores para saber si se registro el usuario
            $sql="SELECT * FROM users  WHERE identificacion=:identificacion OR email=:email";
            // se prepara la consulta (lo que necesita sql para la consulta)
            $result = $conexion->prepare($sql);
            // convierte variables en parametros
            $result->bindParam(":identificacion",$identificacion);
            $result->bindParam(":email",$email);
            // se ejecuta la consulta y se guarda los resultados en $result
            $result->execute();
            // fetch convierte el resultado en un arreglo
            $f = $result->fetch();

            if($f){
                echo '<script>alert("los datos ya estan registrados en el sistema")</script>';
            echo "<script>location.href='../view/extras/register.php'</script>"; 
            // registrar en la base de datos
            }else{   
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql = "INSERT INTO users (identificacion,nombres,apellidos,tipoDoc,telefono,clave,rol,estado,email) VALUES(:identificacion,:nombres,:apellidos,:tipoDoc,:telefono,:clave,:rol,:estado,:email)";
                // preparar el registro
                $statement = $conexion->prepare($sql);

                $statement->bindParam(":identificacion",$identificacion);
                $statement->bindParam(":nombres",$nombres);
                $statement->bindParam(":apellidos",$apellidos);
                $statement->bindParam(":clave",$passmd);
                $statement->bindParam(":tipoDoc",$tipoDoc);
                $statement->bindParam(":telefono",$telefono);
                $statement->bindParam(":rol",$rol);
                $statement->bindParam(":estado",$estado);
                $statement->bindParam(":email",$email);

                $statement->execute();

                echo '<script>alert("datos registrados con exito")</script>';
                echo "<script>location.href='../view/extras/register.php'</script>"; 

                
            }

            
        }

    }

?>