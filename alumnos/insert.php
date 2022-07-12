<?php
    require_once("../lib/functions.php") ;

    $nombre = $_POST['fname'];
    $apellido = $_POST['lname'] ;
    $telefono = $_POST['phone'] ;
    $correo = $_POST['email'] ;
    $licenciatura = $_POST['licenciatura'] ;
    $cuatri = $_POST['cuatri'] ;
    $status = $_POST['status'] ;

    // echo $nombre ;

    insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatri, $status);

    header('location: index.php') ;

   // print_r($_POST)

?>