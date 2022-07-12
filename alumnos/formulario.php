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
    <form action="insert.php"  method="post" >
        <ul>
            <li> 
                <label for="fname">Nombre:</label>
                <input type="text" id="fname" name="fname">
            </li>
            <li>
                <label for="lname">Apellido: </label>
                <input type="text" id="lname" name="lname">
            </li>
            <li> 
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone">
            </li>
            <li>
                <label for="email">Correo: </label>
                <input type="email" id="email" name="email">
            </li>
            <li> 
                <label for="licenciatura">Licenciatura:</label>
                <input type="text" id="licenciatura" name="licenciatura">
            </li>
            <li>
                <label for="cuatri">Cuatrimestre: </label>
                <input type="text" id="cuatri" name="cuatri">
            </li>
            <li>
                <label for="status">Status: </label>
                <input type="text" id="status" name="status">
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>