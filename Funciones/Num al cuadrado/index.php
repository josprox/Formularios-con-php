<?php

function elevacion(int $num){
    $numero_al_cuadrado = pow($num, 2);
    return $numero_al_cuadrado;
}
echo "<h2>Numero al cuadrado</h2>";
print("Si mi numero es 7, al cuadrado es: ". elevacion(7));

?>