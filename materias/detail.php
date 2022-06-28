<?php
require_once("../lib/functions.php") ;
$id = $_GET['id'] ;
$users = get_all_materias($connect) ;
$resultado = get_materias($connect, $id) ;
$materia =mysqli_fetch_array($resultado) ;
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
    <h1>Detalle de la materia <?php echo $materia ['nombre'] ?>
    <small> <a href="../materias/">Regresar </a> </small> </h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Cuatrimestre</td>
                <td>Licenciatura</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($users)) {
        ?>

        <tr>
            <td><?php echo $fila ['id'] ; ?> </td>
            <td><?php echo $fila ['nombre'] ; ?> </td>
            <td><?php echo $fila ['cuatrimestre'] ; ?> </td>
            <td><?php echo $fila ['licenciatura'] ; ?> </td>
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