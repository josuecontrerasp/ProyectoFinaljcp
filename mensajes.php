<?php include('bd.php'); ?>
<!doctype html>
<html lang="es">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="diseño.css">

    <title>Mensajes</title>
  </head>
  <body>
   
  <div class="btn-group w-100" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-warning"><a href="index.html" style="text-decoration: none">Inicio</a></button>
        <button type="button" class="btn btn-info"><a href="tiendas.html" style="text-decoration: none">Tienda</a></button>
        <button type="button" class="btn btn-danger"><a href="contactos.php" style="text-decoration: none">Contáctenos</a></button>
      </div>
      <br><br>
      <div class="container">
        <div class="row">
        <h3><p style="color: azure">Mensajes Recibidos</p></h3>
        </div>
      </div>
<br><br><br>



<div class="container"> 
<div class="col-12">
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">No.Mensaje</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>

  <tbody>
<?php 
$query="SELECT * FROM mensajes";
$resultado=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($resultado)){ ?>
<tr class="table-dark">
  <td><?php echo $row['nomensaje'] ?></td>
  <td><?php echo $row['nombre'] ?></td>
  <td><?php echo $row['telefono'] ?></td>
  <td><?php echo $row['correo'] ?></td>
  <td><?php echo $row['mensaje'] ?></td>
</tr>

<?php } ?>

  </tbody>
</table>
</div>
</div> 



<br><br><br><br><br><br><br><br>

<footer class="bg-light text-center text-lg-start">
  
  <div class="text-center p-3" style="background-color: rgb(66, 40, 16);">
   
   <div class="container">
     <div class="row">
    <div class="col-6">
    <div class="text-light">PBX-3000-2000 - Dirección: 097-656 Guajitos Zona 21 </div>
  </div>
  <div class="col-2">
    <div class="text-light">Carné: 2020-40203</div>
  </div>
  <div class="col-4">
    <div class="text-light">Nombre: Josué David Contreras Patzán </div>
  </div>
  </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>