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
  
  <h2>Maximo de dos numeros</h2>
  <p>Hola mucho gusto, yo te ayudaré a saber el maximo de dos numeros, por favor dime tus números</p>
</div>
</center>
<form action="respuesta.php" method="post">

    <div class="content-original-mx">
    
    <div class="mb-3">
    <label class="form-label">Dime tu nombre</label>
    <input class="form-control" type="text" name="nombre">
    <div class="form-text text-azul">Cual es tu primera cantidad a comprobar.</div>
  </div>
    <div class="mb-3">
    <label class="form-label">número 1</label>
    <input class="form-control" type="text" name="numero1">
    <div class="form-text text-azul">Cual es tu primera cantidad a comprobar. Ejemplo: 5 es mayor que...</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Número 2</label>
    <input class="form-control" type="text" name="numero2">
    <div class="form-text text-azul">Cual es tu segunda cantidad a comprobar.</div>
  </div>
  <button class="btn1 btn-primary" type="submit">Submit</button>
  
    
    </div>

</form>
    
</body>
</html>