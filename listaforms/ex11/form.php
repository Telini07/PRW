<?php
$pront = $_POST['pront'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$periodo = $_POST['periodo'];
$mod = $_POST['mod'];

if($pront = null || $nome = null)
{
    echo "Dado Inválido!";
}
else if ($idade < 15 && $idade > 75 )
{
    echo "Dado Inválido!";
}
else if ($periodo != "V-Vespertino" && $periodo != "N-Noturno")
{
    echo "Dado Inválido!";
}
else if ($mod < 1 && $mod > 4)
{
    echo "Dado Inválido!";
}
else {
    echo "Tudo certo chefia!";
}
?>