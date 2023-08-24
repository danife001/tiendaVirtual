<?php


    function cargarProdC(){
        $objetoConsultas = new consultasP();
        $result = $objetoConsultas->mostrarProd();

        if (!isset($result)) {
            echo "<h2>NO HAY PRODUCTOS REGISTRADOS</h2>";
        }else{
            foreach($result as $f){
                echo '
                
                <div class="col">
                  <div class="card">
                    <img  width ="80px" src="../'.$f['fotoP'].'"  alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$f['nombreP'].'</h5>
                      <p class="card-text">'.$f['descrip'].'</p>
                      <p>Precio: '.$f['precio'].' </p>
                      <button class="btn btn-light" >agregar al carrito</button>
                    </div>
                  </div>
                </div>
                
              

                ';
            }
        }

    }

?>
 <!-- <div class="column is-4-widescreen is-6-tablet">
                    <div class="card px-5 py-6 has-text-centered" data-aos="fade-up" data-aos-delay="100">
                    <img width ="80px" src="../'.$f['fotoP'].'"alt ="foto">
                    <h4 class="mb-3 mt-4">'.$f['nombreP'].' '.$f['descrip'].'</h4>
                    <p>Precio: '.$f['precio'].' </p>
                    
                    </div>
                </div>
                 -->