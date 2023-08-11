<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWSL LAB PRACTICO 1(Registro)</title>

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
                        <div class="col-sm-6">
                            <label for="Nombres">Nombres</label>
                            <input type="text" class="form-control" id="Nombres" placeholder="Nombres">
                        </div>
                        <div class="col-sm-6">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="DUI">DUI</label>
                            <input type="text" class="form-control" id="DUI" placeholder="DUI">
                        </div>
                        <div class="col-sm-6">
                            <label for="Direccion">Direccion</label>
                            <input type="text" class="form-control" id="Direccion" placeholder="Direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="Ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad">
                        </div>
                        <div class="col-sm-6">
                            <label for="Departamento">Departamento</label>
                            <input type="text" class="form-control" id="Departamento" placeholder="Departamento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="NumeroDeTelefono">Numero de telefono</label>
                            <input type="number" class="form-control" id="NumeroDeTelefono" placeholder="Numero de telefono">
                        </div>
                        <div class="col-sm-6">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="Username" placeholder="Username">
                        </div>
                        <div class="col-sm-6">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="Password">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary px-4 float-right">Guardar</button>
                    <button type="button" class="btn btn-primary px-4 float-right">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>