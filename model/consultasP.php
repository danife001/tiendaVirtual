<?php

    class consultasP{
        public function registrarProd($serie,$nombreP,$fotoP,$descrip,$precio,$cantidad){
            
            // primero validar que no exista el mismo usuario

            // creamos objeto conexion
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            //consultamos los valores para saber si se registro el usuario
            $sql="SELECT * FROM productos  WHERE serie =:serie ";
            // se prepara la consulta (lo que necesita sql para la consulta)
            $result = $conexion->prepare($sql);
            // convierte variables en parametros
            $result->bindParam(":serie",$serie);
            
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

                $sql = "INSERT INTO productos (serie,nombreP,fotoP,descrip,precio,cantidad) VALUES(:serie,:nombreP,:fotoP,:descrip,:precio,:cantidad)";
                // preparar el registro
                $statement = $conexion->prepare($sql);

                $statement->bindParam(":serie",$serie);
                $statement->bindParam(":nombreP",$nombreP);
                $statement->bindParam(":fotoP",$fotoP);
                $statement->bindParam(":descrip",$descrip);
                $statement->bindParam(":precio",$precio);
                $statement->bindParam(":cantidad",$cantidad);
                

                $statement->execute();

                echo '<script>alert("producto registrados con exito")</script>';
                echo "<script>location.href='../view/prod/registrarProd.php'</script>"; 

                
            }

            
        }
        public function actualizarProd($serie,$nombreP,$descrip,$precio,$cantidad){
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql = "UPDATE productos SET serie=:serie,nombreP=:nombreP,descrip=:descrip,precio=:precio,cantidad=:cantidad WHERE serie=:serie ";
                // preparar el registro
                $statement = $conexion->prepare($sql);

                $statement->bindParam(":serie",$serie);
                $statement->bindParam(":nombreP",$nombreP);
               
                $statement->bindParam(":descrip",$descrip);
                $statement->bindParam(":precio",$precio);
                $statement->bindParam(":cantidad",$cantidad);

                $statement->execute();

                echo '<script>alert("datos modificados con exito")</script>';
                echo "<script>location.href='../view/prod/verProd.php'</script>";
        }

        public function mostrarProd(){
            $f = null;
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $consultar = "SELECT * FROM productos";
            $result = $conexion->prepare($consultar);
            $result->execute();
            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        } 

        public function cargarProdC(){
            $f = null;
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            $consultar = "SELECT * FROM productos";
            $result = $conexion->prepare($consultar);
            $result->execute();
            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        } 
        
        public function buscarProd($id_user){

            $f = null;

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $buscar ="SELECT *  FROM productos WHERE serie =:id_user ";
            $result = $conexion->prepare($buscar);
            $result->bindParam(':id_user',$id_user);
            $result->execute();

            while($arreglo = $result->fetch()){
                $f[]= $arreglo;
            }
            return $f;

        }    

        public function eliminarUser($id_user){
            // conectarse de nuevo a base de datos
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();     

            $sql = "DELETE FROM productos WHERE serie=:id_user";
            $statement =$conexion->prepare($sql);
            $statement->bindParam('id_user',$id_user);
            $statement->execute();

            echo '<script>alert("el producto fue eliminado")</script>';
                echo "<script>location.href='../view/Prod/verProd.php'</script>"; 



        }
    }



?>