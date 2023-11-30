<?php

// Incluimos la conexión a la base de datos
include("db.php");

if (isset($_POST['workers_register_sent'])) {
  
    if (strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['role']) >= 1 && 
        strlen($_POST['address']) >= 1 && 
        strlen($_POST['phone']) >= 1) {
        $name = trim($_POST['nombre']);
        $role = trim($_POST['role']);
        $address = trim($_POST['address']);
        $phone = trim($_POST['phone']);

        $consulta = "INSERT INTO empleado ( name, rol, direccion, telefono ) VALUES ('$name','$role','$address','$phone')";
        $resultado = mysqli_query($conn,$consulta);

        if(resultado){
          ?>
          <h3 class="ok">Empleado registrado correctamente</h3>
          <?php
        }else {
          ?>
          <h3 class="bad">Ups! ocurrio un error</h3>
          <?php
        }
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y control de empleados</title>

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <link href="estilo.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="main">

<div id="content" class="txt_content">
  <h2>REGISTRO DE EMPLEADOS</h2>
  <p>Llene lo que se le pide a continuación</p>

  <form action="tabla_workers.php" method="post">
    <table>
      <tr>
        <td><label for="nombre">NOMBRE:*</label></td>
        <td><input type="text" name="nombre"></td>
      </tr>
      <tr>
        <td><label for="role">ROL:</label></td>
        <td>
          <select name="role">
            <option value="employee" selected>Empleado</option>
            <option value="admin">Administrador</option>
            <option value="helper">Ayudante</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="address">DIRECCION:*</label></td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td><label for="phone">TELEFONO:</label></td>
        <td><input type="text" name="phone"></td>
      </tr>
      
      <tr>
        <td></td>
        <td><input type="submit" value="REGISTRAR" name="workers_register_sent"></td>
      </tr>
    </table>
  </form>
  
</div>
</body>
</html>