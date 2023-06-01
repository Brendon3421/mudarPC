<?php
$notas=[10, 9.3 , 8.3 , 5.2];
$soma = array_sum($notas);


 $resultado = $soma /count($notas);
echo $resultado;
if ($resultado > 7){
    echo "passou";
} else if($resultado < 6.9 ) {
    echo "media";
}else if ($resultado < 4){
    echo "reprovado";
};


?>
