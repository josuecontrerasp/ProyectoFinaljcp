<?php include('bd.php'); ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="diseño.css">
    <title>Contáctenos</title>
  </head>
  <body>
      
  <div class="btn-group w-100" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-warning"><a href="index.html" style="text-decoration: none">Inicio</a></button>
        <button type="button" class="btn btn-info"><a href="tiendas.html" style="text-decoration: none">Tienda</a></button>
        <button type="button" class="btn btn-danger"><a href="contactos.php" style="text-decoration: none">Contáctenos</a></button>
        <button type="button" class="btn btn-dark"><a href="iniciarsesion.html" style="text-decoration: none">Ver Mensajes</a></button>
    </div>
<br><br>

    <div class="container">
        <div class="row">
        <h3><p style="color: azure">Contáctenos</p></h3>
        </div>
      </div>
<br>


      <form action="guardar.php" method="post">
        <div class="container">
          <div class="row">
            <div class="col-12">
              
              <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="No.Mensaje" name="nomensaje">
          <label for="floatingInput">Ingrese No.Mensaje</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre" name="nombre">
          <label for="floatingPassword">Ingrese Nombre</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Teléfono" name="telefono">
          <label for="floatingPassword">Ingrese No.Telefono</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Correo" name="correo">
          <label for="floatingPassword">Ingrese Correo</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Mensaje" name="mensaje">
          <label for="floatingPassword">Ingrese Su Mensaje</label>
        </div>
        <br>
        <center><input type="submit" class="btn btn-success" name="enviar"></center>
            </div>
            </div>
            </div>
        </form>

<br><br>

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