<?php

    function cargarProd(){
        $objetoConsultas = new consultasP();
        $result = $objetoConsultas->mostrarProd();

        if (!isset($result)) {
            echo "<h2>NO HAY PRODUCTOS REGISTRADOS</h2>";
        } else{
            echo'<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>foto</th>
                    <th>serie</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>precio</th>
                    <th>cantidad</th>                    
                    <th>ver/modificar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach ($result as $f){
                
                echo'
                <tr>
                <td><img width ="80px" src="../'.$f['fotoP'].'"alt ="foto"></td>
                <td>'.$f['serie'].'</td>
                <td>'.$f['nombreP'].'</td>
                <td>'.$f['descrip'].'</td>
                <td>'.$f['precio'].'</td>
                <td>'.$f['cantidad'].'</td>
                
                <td><a href="modificarProdAdmin.php?id_user='.$f['serie'].'" class="btn btn-success">ver/editar</td>
                <td><a href="../../controller/eliminarProdAdmin.php?id_user='.$f['serie'].' " class="btn btn-danger">eliminar </td>
                </tr>
                
                ';
            } 
            echo'
             </tbody>
             </table>
           ';     
        }

    }

?>