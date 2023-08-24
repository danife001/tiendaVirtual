<?php

    function cargarU(){

        if(isset($_GET['id_user'])){
            // capturamos en una variable local
            $id_user = $_GET['id_user'];
            // se crea objetoConsultas para acceder a una funcion 
            $objetoConsultas = new ConsultasA();
            // enviamos a la funcion la llave primaria para hacer el selec
            $result = $objetoConsultas->buscarUser($id_user);
            foreach($result as $f){
                echo'
                 <div class="basic-form">
                                        <form action="../../controller/modificarUserAdmin.php" method="POST">
                                            <div class="row">
                                            <div class="mb-3 col-md-6">
                      <label for="identificacion" class="form-label">IDENTIFICACION</label>
                      <input type="number" class="form-control" id="identificacion" readonly="readonly" value="'.$f['identificacion'].'" name="identificacion">
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="tipoDoc" class="form-label">tipo de documento</label>
                        <select class="form-control" name="tipoDoc" aria-label="Default select example">
                            <option value="'.$f['tipoDoc'].'">'.$f['tipoDoc'].'</option>
                            <option value="cc">CC</option>
                            <option value="TI">TI</option>
                            <option value="CE">CE</option>
                          </select>
                      </div>
                        
                        <div class="mb-3 col-md-6">
                          <label for="nombres" class="form-label">Nombres</label>
                          <input type="text" class="form-control" id="nombres" value="'.$f['nombres'].'"required name="nombres">
                        </div>

                          <div class="mb-3 col-md-6">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" class="form-control" id="apellidos" value="'.$f['apellidos'].'"required name="apellidos">
                          </div>

                            <div class="mb-3 col-md-6">
                              <label for="email" class="form-label">email</label>
                              <input type="email" class="form-control" id="email" value="'.$f['email'].'" required name="email">
                            </div>

                            <div class="mb-3 col-md-6">
                              <label for="telefono" class="form-label">telefono</label>
                              <input type="number" class="form-control" id="telefono" value="'.$f['telefono'].'" required name="telefono">
                            </div>
                           
                            <div class="mb-3 col-md-6">
                        <label for="rol" class="form-label">rol</label>
                        <select class="form-control" required name="rol" aria-label="Default select example">
                            <option value="'.$f['rol'].'">'.$f['rol'].'</option>
                            <option value="admin">administrador</option>
                            <option value="vendedor">vendedor </option>
                            <option value="usuario">usuario</option>
                          </select>
                          
                          
                      </div>

                           
                            <div class="mb-3 col-md-6">
                        <label for="estado" class="form-label">estado</label>
                        <select class="form-control" required name="estado" aria-label="Default select example">
                            <option value="'.$f['estado'].'">'.$f['estado'].'</option>
                            <option value="activo">activo</option>
                            <option value="pendiente">pendiente</option>
                          </select>

                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>';

            }


        }
    }





?>