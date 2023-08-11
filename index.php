<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWSL LAB PRACTICO 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php require "header.php" ?>

    <h1>Mejores canciones</h1>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Posicion</th>
            <th scope="col">Cancion</th>
            <th scope="col">Cantante</th>
            <th scope="col">Enlace</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>All Girls Are The Same</td>
            <td>Juice wrld</td>
            <td><a href="https://www.youtube.com/watch?v=h3EJICKwITw" target="_blank">Ver</a></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Lil Mosey</td>
            <td>Kamikaze</td>
            <td><a href="https://www.youtube.com/watch?v=HShOMLxQ1Ww" target="_blank">Ver</a></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Shoota</td>
            <td>Playboi Carti ft. Lil Uzi</td>
            <td><a href="https://www.youtube.com/watch?v=NFAaeGO0WFo" target="_blank">Ver</a></td>
            </tr>
            <th scope="row">4</th>
            <td>Carter son</td>
            <td>NBA Youngboy</td>
            <td><a href="https://www.youtube.com/watch?v=qXNuHTsSTv4" target="_blank">Ver</a></td>
            </tr>
            <th scope="row">5</th>
            <td>Fuck Love</td>
            <td>XXX Tentation ft Trippie Red</td>
            <td><a href="https://www.youtube.com/watch?v=JcWOSgImiRw" target="_blank">Ver</a></td>
            </tr>
        </tbody>
    </table>

    <?php require "footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>