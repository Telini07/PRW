<?php
$nome = $_POST['nome'];
$hora = $_POST['hora'];

if($hora <= 12)
{
    echo "<p>Bom dia $nome!</p>";
}
else if($hora > 12 && $hora <= 18)
{
    echo "<p>Bom tarde $nome!</p>";
}
else if($hora > 18)
{
    echo "<p>Bom noite $nome!</p>";
}

?>