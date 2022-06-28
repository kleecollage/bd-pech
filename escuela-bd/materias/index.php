<?php
require_once("../lib/connect.php") ;
$consulta = "SELECT * FROM materias" ;
$resultado = mysqli_query($connect, $consulta);
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
            while ($fila = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?php echo $fila ['id'] ; ?> </td>
            <td><?php echo $fila ['nombre'] ; ?> </td>
            <td><?php echo $fila ['cuatrimestre'] ; ?> </td>
            <td><?php echo $fila ['licenciatura'] ; ?> </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>