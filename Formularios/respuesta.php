<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por su visita</title>
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
            <h1>Bienvenido <?php echo $_POST["nombre"];?> </h1>

            <p>Su Telefono a sido registrado como <?php echo $_POST["telefono"] ?></p>

            <!--tarjeta 1-->
            <div class="tarjeta2">
                    <div class="content4">
                        <div class="left">
                            <img src="img/LogoCetis.png" width="50" alt="">
                        </div>

                        <div class="right">
                            <div class="task">Su libro <?php echo $_POST["libro"] ?> está disponible</div>
                            <div class="status">8 de cada 10 personas lo prefieren</div>
                            <div class="progreso">
                                <div class="fill fill-80"></div>
                            </div>
                        </div>
                    </div>

                    <div class="botones">
                        <button class="btn1">Libro comprobado</button>
                    </div>

                </div>
                <!--Prueba de edad-->
                <p>Si pasa la comprobación, verá la siguiente leyenda para poderlo descargar<br>Gracias por visitarnos</p>

                <?php
                $edad = $_POST["edad"];
                echo "La edad registrada es: ". $edad . "<br>";
                if($edad<18){
                    echo "No puedes descargar el libro, es para mayores de edad";
                }else{
                    echo"Descargalo ahora";
                }
                ?>


    </div>
    </center>


</div>
    
</body>
</html>