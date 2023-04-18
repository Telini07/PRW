<?php
// $_GET obtém dado do formulário enviado via GET
// $_POST obtém dado do formulário enviado via POST
$nome = $_POST['nome']; // nome entre '' deve ser igual ao do input do formulario
$idade = $_POST['idade'];
echo "<h1>$nome</h1>";
echo "<h2>$idade</h2>";
echo "<input = value=$idade>";
if(strlen($nome) < 20){
    echo "<h3>Nome deve conter no minimo 20 caracteres</h3>";
}
if($idade >= 18){
    echo "<h3>Aluno maior de idade!</h3>";
}else
{
    echo "<h3>Aluno menor de idade!</h3>";
}
?>
<!-- butao que volta-->
 <a href='form.html'><button>Voltar</button></a>