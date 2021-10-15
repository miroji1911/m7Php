<?php
    $nom = $_REQUEST['nombre'];
    $cognom = $_REQUEST['cognom'];
    $nomCookies = $nom.' '.$cognom;

    include('/var/www/html/php/cookies/view/menu.php');

?>
