<?php
$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$f = $_POST['f'];

$media = ($n1 + $n2) / 2;

if($media < 5)
{
    echo "<h2 style = 'color: red'>Reprova por nota</h2>";
}
else if ($f < 75)
{
    echo "<h2 style = 'color: red'>Reprovado por falta</h2>";
}
else if ($f >=75 && $media >= 5)
{
    echo "<h1 style = 'color: green'>APROVADO</h1>";
}

?>
<br>
<a href='form.html'><button>Voltar</button></a>