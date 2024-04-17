<?php
function cuadradocubo($valor, &$cuad, &$cubo)
{
    $cuad=$valor*$valor;
    $cubo=$valor*$valor*$valor;

}

cuadradocubo(5, $c1, $c2);
echo "el cuadrado de 5 es: " .$c1 ."<br>";
echo "el cubo de 5 es: " .$c2;
 

?>