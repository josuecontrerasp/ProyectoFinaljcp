<?php
include('bd.php');
 if(isset($_POST['enviar'])) {
    $no_mensaje=$_POST['nomensaje'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $query="INSERT INTO mensajes (nomensaje,nombre,telefono,correo,mensaje) VALUES ('$no_mensaje','$nombre','$telefono','$correo','$mensaje')";
    $result=mysqli_query($conn,$query);
    echo '<script language="javascript"> ';
    echo 'alert("Sus datos fueron enviados")';
    echo '</script>';
    if(!$result){
        dic("Error");

    }
    header("location:contactos.html");
 }

?>