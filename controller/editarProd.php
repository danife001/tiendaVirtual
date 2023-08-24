<?php

    function cargarP(){

        if(isset($_GET['id_user'])){
            // capturamos en una variable local
            $id_user = $_GET['id_user'];
            // se crea objetoConsultas para acceder a una funcion 
            $objetoConsultas = new ConsultasP();
            // enviamos a la funcion la llave primaria para hacer el selec
            $result = $objetoConsultas->buscarProd($id_user);
            foreach($result as $f){
                echo'
                <div class="card-body">
                <div class="basic-form">
                    <form action="../../controller/modificarProd.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="mb-3 col-md-4">
  <label for="serie " class="form-label">numero de serie </label>
  <input type="number" class="form-control" id="serie" readonly="readonly" value="'.$f['serie'].'" name="serie"  >
  </div>

    
    <div class="mb-3 col-md-4">
      <label for="nombreP" class="form-label">Nombre del producto</label>
      <input type="text" class="form-control" id="nombreP" value="'.$f['nombreP'].'" name="nombreP" >
    </div>

  

      <div class="mb-3 col-md-4">
        <label for="precio" class="form-label">precio</label>
        <input type="number" class="form-control" id="precio" value="'.$f['precio'].'"  name="precio"  >
      </div>

        <div class="mb-3 col-md-4">
          <label for="descrip" class="form-label">descripcion</label>
          <input type="text" class="form-control" id="descrip" value="'.$f['descrip'].'" name="descrip"  >
        </div>
        <div class="mb-3 col-md-4">
        <label for="cantidad" class="form-label">cantidad</label>
        <input type="number" class="form-control" id="cantidad"value="'.$f['cantidad'].'"  name="cantidad"  >
      </div>


     
                        
                        
                        <button type="submit" class="btn btn-default bg-primary">Registrar</button>
                    </form>';

            }


        }
    }





?>