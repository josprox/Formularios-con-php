<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://ray.josprox.com.mx/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="https://ray.josprox.com.mx/img/PicsArt_02-03-07.35.11-1024x1024.png" type="image/x-icon">
</head>
<body>
<!--Creado por: Melchor Estrada José Luis-->

<center>
<div class="content3">
  
  <h2>Bienvenido a libros</h2>
  <p>Hola mucho gusto, aquí podrás descargar libros de una manera facil, favor de llenar lo siguiente</p>
</div>
</center>

<form action="respuesta.php" method="post">

    <div class="content-original-mx">
    
    <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input class="form-control" type="text" name="nombre">
    <div class="form-text text-azul">Queremos saber como te llamas.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Validacion de mayoría de edad</label>
    <input class="form-control" type="text" name="edad">
    <div class="form-text text-azul">Queremos saber tu edad.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Telefono</label>
    <input class="form-control" type="text" name="telefono">
    <div class="form-text text-azul">Necesitamos una forma de contactarte.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Libro favorito</label>
    <input class="form-control" type="text" name="libro">
    <div class="form-text text-azul">Queremos saber cuál va a ser su compra.</div>
  </div>
  <button class="btn1 btn-primary" type="submit">Submit</button>
  
    
    </div>

</form>
    
</body>
</html>