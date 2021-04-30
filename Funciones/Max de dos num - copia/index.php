<?php

function resultado($x1, $x2){
    $mayor= $x1>$x2;
    return $mayor;
}

echo "<h2>Mayor qué</h2>";
print("Si te digo que tengo dos valores los cuales son 18 y 7<br> ¿18 es mayor que 7?<br>");

if( resultado(18,7) ){
    print ("R=Es mayor que el numero");
}else{
    print("R=Es menor que el numero");
}