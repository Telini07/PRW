<?php
$num = $_POST['num'];

for($i = 1; $i <= 10; $i++) 
{
    $res = $num * $i;
    echo "<p>$num * $i = $res</p>";
}
?>
<br>
 <a href='form.html'><button>Voltar</button></a>