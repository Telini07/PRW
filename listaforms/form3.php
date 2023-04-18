<?php
$ano = $_POST['ano'];

if($ano%4 == 0 && $ano%100 != 0){
    echo "$ano É BISSESTO!";
}
else{
    echo "$ano NÃO É BISSESTO!";
}
?>
<br>
<a href='form3.html'><button>Voltar</button></a>