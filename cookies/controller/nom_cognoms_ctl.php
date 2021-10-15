<?php

    include 'crearCookie.php';

    $nomCookie="nomCognom";
    $cadena="";

    if(isset($_REQUEST['nombre']) && isset($_REQUEST['cognoms'])){
        $nom = $_REQUEST['nombre'].' ';
        $cognom = $_REQUEST['cognoms'];
        $cadena = $nom.$cognom;
    }


    crearCookie('nomCookie',$cadena);
    

    header('Location: ../view/menu.php')
    

    

?>
