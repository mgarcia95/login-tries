<?php

session_start();

echo "Hola ".$_SESSION['nombre'];
echo "Sus datos: <br>";
echo "Nombre: ".$_SESSION['nombre'];
echo "Apellidos: ".$_SESSION['apellidos'];
echo "Direccion: ".$_SESSION['direccion'];
echo "Localidad: ".$_SESSION['localidad'];
echo "Usuario: ".$_SESSION['usuario'];
echo "Contraseña: ".$_SESSION['contrasena'];

?>
<style>
body{
 background-color: <?php echo $_SESSION['colorfondo'];?>;
 color: <?php echo $_SESSION['colorletra'];?>;
 font-family: <?php echo $_SESSION['tipoletra'];?>;
 font-size: <?php echo $_SESSION['tamanoletra'];?>;
}
</style> 
<a href="salir.php">Salir</a>
<a href="inicio.php">Volver</a>