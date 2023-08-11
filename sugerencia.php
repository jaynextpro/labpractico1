<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWSL LAB PRACTICO 1(Sugerencia)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <?php require "header.php" ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form class="formulario_de_dos">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="sugerencias">Sugerencias</label>
                            <textarea class="form-control" id="sugerencias" rows="12"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary px-4 float-right">Enviar solicitud</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php require "footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>