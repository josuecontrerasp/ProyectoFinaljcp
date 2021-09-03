<?php
$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];

if ($usuario == "admin" and $clave =="mensajes") {
    header("location:mensajes.php");
}else {
    echo '<script language="javascript"> ';
    echo 'alert("Usuario o Contraseña Incorrecto")';
    header("location:iniciarsesion.html");
    echo '</script>';
}

?>