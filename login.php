<?php

?>

<form action="inicio.php" method="POST">

Nombre<input type="text" name="nomb"/>
Apellido<input type="text" name="apel"/>
Direccion<input type="text" name="dir"/>
Localidad<input type="text" name="loc"/>
Usuario<input type="text" name="usur"/>
pass<input type="password" name="passwd"/>
Color letra<select name="cl">
    <option value="red">Rojo</option>
    <option value="blue">Azul</option>
    <option value="green">Verde</option>
</select>
Color fondo<select name="cf">
    <option value="red">Rojo</option>
    <option value="blue">Azul</option>
    <option value="green">Verde</option>
</select>
Tipo letra<select name="tl">
    <option value="Times New Roman">Times New Roman</option>
    <option value="Courier New">Courier</option>
    <option value="Comic Sans">Comic</option>
</select>
Tamaño letra<select name="tal">
    <option value="12">12</option>
    <option value="14">14</option>
    <option value="16">16</option>
</select>
<input type="submit" name="aceptar" value="Aceptar"/>
</form>
<br /><a href="index.php">Volver</a>