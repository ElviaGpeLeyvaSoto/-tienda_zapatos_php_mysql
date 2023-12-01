<?php

$id = $_GET['id'];
include("db.php");

$sql = "DELETE FROM empleado WHERE id = '".$id."'";
$resultado = mysqli_query($conn,$sql);

if ($resultado) {

    echo "<script language='JavaScript'>
            alert('Los datos se eliminaron correctamente');
            location.assign('workers.php');
            </script>
    ";
}else{
    echo "<script language='JavaScript'>
            alert('Los datos No se eliminaron de la Base de datos');
            location.assign('workers.php');
            </script>
    ";
}

?>