
<?php

//include("db.php");

$conexion = mysqli_connect('localhost','root','admin','nombre_tienda');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEADOS</title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <link href="css_main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h2>Empleados</h2>

<br>

<table border="1">
<thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ROL</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
    </tr>
</thead>    

    <?php

        $sql="SELECT * FROM empleado";
        $result=mysqli_query($conexion,$sql);

        while($mostrar = mysqli_fetch_array($result)){

    ?>

    <tr>

    <td> <?php echo $mostrar['id'] ?></td>
    <td> <?php echo $mostrar['name'] ?></td>
    <td> <?php echo $mostrar['rol'] ?></td>
    <td> <?php echo $mostrar['direccion'] ?></td>
    <td> <?php echo $mostrar['telefono'] ?></td>

    </tr>
    <?php
    }
    ?>

    

</table>
<br>
    <a href="workers.php">
            <button type="button" class="btn btn-primary">Registrar empleado</button>
    </a>
    <br>

</body>
</html>