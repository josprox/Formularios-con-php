<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel="stylesheet" href="https://ray.josprox.com.mx/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="https://ray.josprox.com.mx/img/PicsArt_02-03-07.35.11-1024x1024.png" type="image/x-icon">
</head>
<body>

<!--Creado por: Melchor Estrada José Luis-->

<div class="content-original-mx">
<center>
    <div class="content3">

            <!--Bienvenida-->
            <h1>Se ha logrado <?php echo $_POST["nombre"];?> </h1>
                <!--Prueba de edad-->
                <?php
                $x = $_POST["numero1"];
                $y = $_POST["numero2"];
                echo "Tu primer cantidad es: ". $x . "<br>";
                echo "Tu segunda cantidad es: ". $y . "<br>";
                if($x<$y){
                    echo "Tu respuesta es correcta, ya que ". $x . " es menor que " . $y;
                }else{
                    echo "Tu respuesta es incorrecta, ya que ". $x . " es mayor que " . $y;
                }
                ?>


    </div>
    </center>


</div>
    
</body>
</html>