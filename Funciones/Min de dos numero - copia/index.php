<?php

function resultado($x1, $x2){
    $mayor= $x1<$x2;
    return $mayor;
}

echo "<h2>Menor qué</h2>";
print("Si te digo que tengo dos valores los cuales son 12 y 24<br> ¿12 es menor que 24?<br>");

if( resultado(12,24) ){
    print ("R=Si, es menor que el numero");
}else{
    print ("R=No, es mayor que el numero");
}