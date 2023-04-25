<?php
$nome = $_POST['nome'];
$comida = $_POST['comida'];
$prw = $_POST['prw'];
$cor = $_POST['cor'];
$vei = $_POST['vei'];

echo "<p>Nome: $nome</p>";
echo "<p>Comida: $comida</p>";
if($prw = true) echo "<p>Gosta de PRW? Gosta né safado</p>";
if($cor == "Azul") echo "<p>Cor: Azul</p>";
else if($cor == "Verde") echo "<p>Cor: Verde</p>";
else if($cor == "Vermelho") echo "<p>Cor: Vermelho</p>";
echo "<p>Veículo: $vei</p>";
?>