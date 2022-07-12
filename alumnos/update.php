<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h2>Formulario de alumnos</h2>
    <form action="insert.php" mehod="post" >
        <ul>
            <li> 
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Apellido: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li> 
                <label for="name">Teléfono:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Correo: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li> 
                <label for="name">Licenciatura:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Cuatrimestre: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
=======
<?php
require_once("../lib/functions.php") ;
$id = $_GET['id'] ;

eliminar_alumno($connect, $id) ;

header('location: index.php') ;
?>
>>>>>>> Stashed changes
