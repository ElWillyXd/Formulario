<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Guillermo D.C NeaMercadoFSA@gmail.com" />
    <meta name="description" content="Formulario con conexión a base de datos MySQL"/>
    <title>Base de Datos 1</title>
    <link rel="stylesheet" href="/estilos/index.css">
</head>
<body>
    <div class="caja">
        <h1 class="titulo">Base de Datos 1</h1>
        <p class="parrafo">Carga de Datos en la DB con php html y css</p>
        <form action="datos.php" method="post" name="formulario">
            <p>Nombre:</p>
            <input type="text" name="nombre" required>
            <p>Apellido:</p>
            <input type="text" name="apellido" required>
            <p>Correo:</p>
            <input type="text" name="email" required >
            <p>Mensaje:</p>
            <input class="mensaje" type="text" name="mensaje" required>
            <input class="boton" type="reset" value="Borrar Datos">
            <input class="boton" type="submit" value="Mandar Datos">
        </form>
    </div>
</body>
</html>