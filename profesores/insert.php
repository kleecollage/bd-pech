<?php
    require_once("../lib/functions.php") ;

    $fname = $_POST['nombre'];
    $lname = $_POST['apellido'] ;
    $phone = $_POST['telefono'] ;
    $email = $_POST['correo'] ;

    // echo $fname ;

    insertar_profesores($fname, $lname, $phone, $email);

    // header('location: index.php') ;

    print_r($_POST)

?>