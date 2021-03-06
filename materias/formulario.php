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
    <div class="container">
        <div class="row">
            <form action="insert.php" method="post">
              <div class="mb-3">
                <label for="materiaName" class="form-label">Nombre de la materia</label>
                <input type="text" class="form-control" id="materiaName" name="materiaName">
              </div>

              <div class="col-3">
                  <label for="materiaCuatri" class="form-label">Cuatrimestre</label>
                  <select id="materiaCuatri" class="form-select" name="materiaCuatri">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>

              <div class="mb-3">
                <label for="materiaLic" class="form-label">Licenciatura</label>
                <input type="text" class="form-control" id="materiaLic" name="materiaLic">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>