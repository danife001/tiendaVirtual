<?php

    class ConsultasA{

        public function registrarUser($identificacion,$tipoDoc,$nombres,$apellidos,$email,$telefono,$passmd,$rol,$estado, $foto){
            
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

                $sql = "INSERT INTO users (identificacion,nombres,apellidos,tipoDoc,telefono,clave,rol,estado,email,foto) VALUES(:identificacion,:nombres,:apellidos,:tipoDoc,:telefono,:clave,:rol,:estado,:email,:foto)";
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
                $statement->bindParam(":foto",$foto);

                $statement->execute();

                echo '<script>alert("datos registrados con exito")</script>';
                echo "<script>location.href='../view/extras/register.php'</script>"; 

                
            }

            
        }



        public function cargarUsers(){

            // primero se conecta a la base de datos 
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql ="SELECT * FROM users";
            $result = $conexion->prepare($sql);
            $result->execute();

            while($cargar=$result->fetch()){
                $f[]=$cargar;
            }
            return $f;
        }

        public function eliminarUser($id_user){
            // conectarse de nuevo a base de datos
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();     

            $sql = "DELETE FROM users WHERE identificacion=:id_user";
            $statement =$conexion->prepare($sql);
            $statement->bindParam('id_user',$id_user);
            $statement->execute();

            echo '<script>alert("datos registrados con exito")</script>';
                echo "<script>location.href='../view/admin/verUser.php'</script>"; 



        }


        public function buscarUser($id_user){

            $f = null;

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $buscar ="SELECT *  FROM users WHERE identificacion =:id_user ";
            $result = $conexion->prepare($buscar);
            $result->bindParam(':id_user',$id_user);
            $result->execute();

            while($arreglo = $result->fetch()){
                $f[]= $arreglo;
            }
            return $f;

        }

        public function verperfil($email){
            
            $f = null;

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $buscar ="SELECT *  FROM users WHERE email =:email";
            $result = $conexion->prepare($buscar);
            $result->bindParam(':email',$email);
            $result->execute();

            while($arreglo = $result->fetch()){
                $f[]= $arreglo;
            }
            return $f;

        }
        public function actualizarUser($identificacion,$tipoDoc,$nombres,$apellidos,$email,$telefono,$rol,$estado){
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql = "UPDATE users SET identificacion=:identificacion,nombres=:nombres,apellidos=:apellidos,tipoDoc=:tipoDoc,telefono=:telefono,rol=:rol,estado=:estado,email=:email WHERE identificacion=:identificacion ";
                // preparar el registro
                $statement = $conexion->prepare($sql);

                $statement->bindParam(":identificacion",$identificacion);
                $statement->bindParam(":nombres",$nombres);
                $statement->bindParam(":apellidos",$apellidos);
               
                $statement->bindParam(":tipoDoc",$tipoDoc);
                $statement->bindParam(":telefono",$telefono);
                $statement->bindParam(":rol",$rol);
                $statement->bindParam(":estado",$estado);
                $statement->bindParam(":email",$email);

                $statement->execute();

                echo '<script>alert("datos modificados con exito")</script>';
                echo "<script>location.href='../view/admin/verUser.php'</script>";
        }

    }

?>