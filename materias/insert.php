<?php
    require_once("../lib/functions.php") ;

    $materia = $_POST['materiaName'];
    $cuatrimestre = $_POST['materiaCuatri'];
    $lic = $_POST['materiaLic'];

    echo $materia ;

    insertar_materia($materia, $lic, $cuatrimestre);

    header('location: index.php') ;

    // print_r($_POST) ;

?>