<?php 

//Configuracion para acceder a la base de datos

function datos(){
    $hostname = "localhost";
    $usuariodb = "root";
    $clavedb = "";
    $dbnombre = "datosphp";

//Generando la conexion con el servidor

    $conectar = mysqli_connect($hostname,$usuariodb,$clavedb,$dbnombre);
    return $conectar;
}

?>