<?php

    // require_once("../model/conexion.php");
    // require_once("../model/consultasA.php");

    function cargarUsers(){

        $objetoConsultas = new ConsultasA();
        $result = $objetoConsultas->cargarUsers();

        if(!isset($result)){
            echo '<h2>no hay usuarios registrados</h2>';
        }  
        else{
            echo'<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>foto</th>
                    <th>identificacion</th>
                    <th>nombres</th>
                    <th>apellidos</th>
                    <th>email</th>
                    <th>estado </th>
                    <th>rol</th>
                    <th>ver/modificar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach ($result as $f){
                
                echo'
                <tr>
                <td><img width ="80px" src="../'.$f['foto'].'"alt ="foto"></td>
                <td>'.$f['identificacion'].'</td>
                <td>'.$f['nombres'].'</td>
                <td>'.$f['apellidos'].'</td>
                <td>'.$f['email'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$f['estado'].'</td>
                <td><a href="modificarUser.php?id_user='.$f['identificacion'].'" class="btn btn-success">ver/editar</td>
                <td><a href="../../controller/eliminarUsersAdmin.php?id_user='.$f['identificacion'].' " class="btn btn-danger">eliminar </td>
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