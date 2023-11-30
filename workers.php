<?php

// Incluimos la conexión a la base de datos
include("db.php");

// Incluimos las utilerías
include("helpers/utils.php");

//Evaluamos si el formulario ha sido enviado, para eso checamos si está definido el indice del botón que envía el formulario
/*if(isset($_POST['workers_register_sent'])) {
  
  // Validamos si no hay campos vacios
  foreach($_POST as $calzon => $caca) {
    if($caca == "" && $calzon != "phone") $error[] = "The $calzon field is required";
  }

  // Validamos si los passwords coinciden
  if($_POST['password'] != $_POST['confirm_password']) $error[] = "The passwords didn't match";

  // Si estamos libres de errores, procedemos a guardar el usuario en la BD
  if(!isset($error)) {
    // Preparamos el query para guardar el usuario en la BD
    $queryInsertUser = sprintf(
      "INSERT INTO users (firstname, lastname, email, password, phone, role) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
      mysqli_real_escape_string($connLocalhost, trim($_POST['firstname'])),
      mysqli_real_escape_string($connLocalhost, trim($_POST['lastname'])),
      mysqli_real_escape_string($connLocalhost, trim($_POST['email'])),
      mysqli_real_escape_string($connLocalhost, trim($_POST['password'])),
      mysqli_real_escape_string($connLocalhost, trim($_POST['phone'])),
      mysqli_real_escape_string($connLocalhost, trim($_POST['role']))
    );

    // Ejecutamos el query
    mysqli_query($connLocalhost, $queryInsertUser) or trigger_error("The user register query has failed.");

    // Redireccionamos al usuario cuando todo ha salido bien
    header("Location: cpanel.php?userRegister=true");

  }

}*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y control de empleados</title>

</head>
<body>
<div id="main">

<div id="content" class="txt_content">
  <h2>User register</h2>
  <p>Use the form below to register a new user.</p>
  <?php if(isset($error)) printMsg($error, "error"); ?>
  <form action="worker_register.php" method="post">
    <table>
      <tr>
        <td><label for="name">NAME:*</label></td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td><label for="role">ROLE:</label></td>
        <td>
          <select name="role">
            <option value="employee" selected>Employee</option>
            <option value="admin">Administrator</option>
            <option value="helper">Helper</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="address">ADDRESS:*</label></td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td><label for="phone">PHONE:</label></td>
        <td><input type="text" name="phone"></td>
      </tr>
      
      <tr>
        <td></td>
        <td><input type="submit" value="Register" name="worker_register_sent"></td>
      </tr>
    </table>
  </form>
  
</div>
</body>
</html>