<?php
require_once("../lib/functions.php") ;
$id = $_GET['id'] ;
$users = get_profesores($connect, $id) ;
$resultado = get_profesores($connect, $id) ;
$profesor =mysqli_fetch_array($resultado) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del profesor <?php echo $profesor ['apellido']." ". $profesor ['nombre'] ?>
    <small> <a href="../profesores/">Regresar </a> </small> </h1>
    <table>
        <thead>
            <tr>
            <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($users)) {
        ?>

        <tr>
        <td><?php echo $fila ['id'] ; ?> </td>
            <td><?php echo $fila ['nombre'] ; ?> </td>
            <td><?php echo $fila ['apellido'] ; ?> </td>
            <td><?php echo $fila ['telefono'] ; ?> </td>
            <td><?php echo $fila ['correo'] ; ?> </td>
            <td><?php echo $fila ['status'] ; ?> </td>
            <!-- <td> <a href="#">Detalle</a></td>
            <td> <a href="#">Editar</a></td>
            <td> <a href="#">Eliminar</a></td> -->
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>