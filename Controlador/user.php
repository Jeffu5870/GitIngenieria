<?php
require_once('../Modelo/apelacion.php');
    $user=$_POST["usuario"];
    $pass=$_POST["pass"];
    $datos=new apelacion();
    $datos_sesion=$datos->usuarios($user, $pass);
    if(!$datos_sesion){
        echo '<script>';
        echo 'alert("El usuario no esta registrado");';
        echo 'window.location.href="../index.php";';
        echo '</script>';
        sleep(1);
}

    else{header('Location: ../vista/principal.php');}
?>