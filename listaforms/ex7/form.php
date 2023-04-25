<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$dias = $idade * 365;

echo "Nome: ". $nome. "\n";
echo "Dias de vida: ". $dias. "\n";

?>
<br>
<a href='form.html'><button>Voltar</button></a>