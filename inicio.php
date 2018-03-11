<?php
include "funciones.php";
if(isset($_REQUEST['aceptar'])){
    $f=fopen("datos.txt","a+");
    fwrite($f,$_REQUEST['nomb'].";".$_REQUEST['apel'].";".$_REQUEST['dir'].";".$_REQUEST['loc'].";".$_REQUEST['usur'].";".$_REQUEST['passwd'].";".$_REQUEST['cl'].";".$_REQUEST['cf'].";".$_REQUEST['tl'].";".$_REQUEST['tal']."\r\n");
}
session_name($_COOKIE['usua']);
session_start();
if(isset($_COOKIE['usua'])){
    $array=datos($_COOKIE['usua']);
    $_SESSION['nombre']=$array[0];
    $_SESSION['apellidos']=$array[1];
    $_SESSION['direccion']=$array[2];
    $_SESSION['localidad']=$array[3];
    $_SESSION['colorletra']=$array[6];
    $_SESSION['colorfondo']=$array[7];
    $_SESSION['tipoletra']=$array[8];
    $_SESSION['tamanoletra']=$array[9];
}
if(isset($_REQUEST['aceptar'])){
$_SESSION['nombre']=$_REQUEST['nomb'];
$_SESSION['apellidos']=$_REQUEST['apel'];
$_SESSION['direccion']=$_REQUEST['dir'];
$_SESSION['localidad']=$_REQUEST['loc'];
$_SESSION['usuario']=$_REQUEST['usur'];
$_SESSION['contrasena']=$_REQUEST['passwd'];
$_SESSION['colorletra']=$_REQUEST['cl'];
$_SESSION['colorfondo']=$_REQUEST['cf'];
$_SESSION['tipoletra']=$_REQUEST['tl'];
$_SESSION['tamanoletra']=$_REQUEST['tam'];
}

echo "Hola ".$_SESSION['nombre'];

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
<a href="datos.php">Ver mis datos</a>