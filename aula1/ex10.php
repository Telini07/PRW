<?php
$numeros =readline();
$numeros2 = readline();
$valores = explode(' ',$numeros);
$valores2 = explode(' ',$numeros2);

$total = ($valores[1] * $valores[2]) + ($valores2[1] * $valores2[2]);
$total = number_format($total, 2, ".", " ");

echo "VALOR A PAGAR: R$ $total\n";
?>
