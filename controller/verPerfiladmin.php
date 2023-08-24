<?php
require_once("../../model/consultasA.php");

function cargarperfil(){

    $email = $_SESSION['email'];
    $objetoConsultas = new ConsultasA();
    $result = $objetoConsultas->verperfil($email);

    foreach ($result as $f){
        echo '
        <li class="text-center"> <img width="40px" src="../'.$f['foto'].'"> <br><br><h5 style="color:#ffffff; font-size:15px;  line-height: 7px; margin-bottom:0 ">'.$f['nombres'].''.$f['apellidos'].'</h5><br><p>'.$f['rol'].'</p></li>
        
        ';

    }
}
?>