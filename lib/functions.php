<?php
require_once("connect.php") ;

function get_all_alumnos($connect) {    
    $consulta = "SELECT * FROM alumnos" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function get_alumnos($connect, $id){    
    $consulta = "SELECT * FROM alumnos WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function get_all_materias($connect) {    
    $consulta = "SELECT * FROM materias" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function get_materias($connect, $id){    
    $consulta = "SELECT * FROM materias WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function get_all_profesores($connect) {    
    $consulta = "SELECT * FROM profesores" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function get_profesores($connect, $id){    
    $consulta = "SELECT * FROM profesores WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}
<<<<<<< Updated upstream
=======

function insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatri, $status){
    global $connect ;
    $consulta = "INSERT INTO alumnos(nombre, apellido, telefono, correo, licenciatura, cuatrimestre, status) 
    VALUES('$nombre', '$apellido', '$phone', '$email', '$licenciatura', '$cuatri', '$status')" ;
    $resultado = mysqli_query($connect, $consulta) ;
    // return $resultado ;
}

function insertar_materia($materia, $lic, $cuatrimestre){
    global $connect ;
    $consulta = "INSERT INTO materias(nombre, licenciatura, cuatrimestre) VALUES('$materia', '$lic', '$cuatrimestre')" ;
    $resultado = mysqli_query($connect, $consulta) ;
    // return $resultado ;
}

function insertar_profesores($fname, $lname, $phone, $email){
    global $connect ;
    $consulta = "INSERT INTO profesores(nombre, apellido, telefono, correo) VALUES('$fname', '$lname', '$phone', '$email')" ;
    $resultado = mysqli_query($connect, $consulta) ;
}

function eliminar_profesor($connect, $id){
    global $connect ;
    $consulta = "DELETE FROM profesores WHERE id = $id" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function eliminar_alumno($connect, $id){
    global $connect ;
    $consulta = "DELETE FROM alumnos WHERE id = $id" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}

function eliminar_materia($connect, $id){
    global $connect ;
    $consulta = "DELETE FROM materias WHERE id = $id" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}
>>>>>>> Stashed changes
?>