<?php
include "funciones.php";
session_start();
if(isset($_COOKIE['error'])) header('Location: intentos.php');
if(isset($_REQUEST['entrar'])){     
    if(!isset($_SESSION['contador'])) $_SESSION['contador']=2;
    if(buscar($_REQUEST['usu'],$_REQUEST['passw'])){
        setcookie("usua",$_REQUEST['usu']);
        session_destroy();
        setcookie("PHPSESSID","",0,"/");        
        header('Location: inicio.php');
    }else{
        if($_SESSION['contador']>0){
            echo "Te quedan ".$_SESSION['contador'];
            $_SESSION['contador']--;    
        } else {
            setcookie("error",1);
            session_destroy();
            setcookie("PHPSESSID","",0,"/");  
            header('Location: intentos.php');
        }
       
        
    }
}

?>
<form action="" method="POST">

Usuario<input type="text" name="usu"/>
Pass<input type="password" name="passw"/>

<input type="submit" name="entrar" value="Entrar"/>

</form>
<form action="login.php" method="POST">

<input type="submit" name="registrar" value="Registrar"/>

</form>