<?php
$peq = $_POST['peq'];
$med = $_POST['med'];
$gra = $_POST['gra'];

$total = ($peq * 10) + ($med * 12) + ($gra * 15);

echo "Total arrecadado: ". $total. " reais";

?>
<br>
<a href='form.html'><button>Voltar</button></a>