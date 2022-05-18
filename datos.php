<?php 

//Vincular la conexion con base de datos

include_once('db.php');

//Recibiendo datos del Formulario

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$mensaje=$_POST['mensaje'];

echo "Los datos son los siguientes: <br>";
echo "$nombre, $apellido, $correo y $mensaje";

$conectar=datos(); //Ejeculas las conexiones con base de datos
$sql="INSERT INTO datosweb (nombre, apellido, correo, mensaje)
VALUES ('$nombre', '$apellido', '$correo', '$mensaje')";
$resulltado = mysqli_query($conectar, $sql) or trigger_error("Query Fallo!" .mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>
