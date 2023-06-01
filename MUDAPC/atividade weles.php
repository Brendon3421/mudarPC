<?php
function multiplicar($valorA , $valorB){
    return $valorA * $valorB;
}
function multiplicarteste(){
    $valorA = 2;
    $valorB = 2;
    $ResultadoEsperado = 4;
    
    $resultadoExecutado = multiplicar($valorA , $valorB);
    if($ResultadoEsperado == $resultadoExecutado){
        echo "teste de mulplicarTeste Certinho";
    } else {
        echo "teste multiplicarTeste com erro";
    }
}
multiplicarteste();


function divisao($valorA ,$valorB){
return $valorA / $valorB;
}
function testedivisao(){
    $valorA = 2;
    $valorB = 2;
    $ResultadoEsperado = 1;

    $ResultadoExecutado = divisao($valorA ,$valorB);
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "teste divisap esta certinho meu xhapa<br/>";
        }else {
            echo "este errado burrao";
        }
}
testedivisao();
























































function calcularIMC($altura, $peso){
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5){
        return "magresa";
    } else if($imc < 25) {
        return "normal";
    }else if ($imc < 30){
        return "sobrepeso";
    }else if ($imc < 40){
        return "obesidade";
    }else {
        return "obesidade grave";
    }
}
function Testemagresa(){
    $altura = 1.75;
    $peso = 40;
    $ResultadoEsperado = "magresa";

    $ResultadoExecutado = calcularIMC($altura, $peso);

    if($ResultadoEsperado == $ResultadoExecutado){
        echo "teste de magresa ok <br/>";
    }else {
        echo "teste de magresa deu erro <br/>";
    }
}
Testemagresa( );
function Testenormal( ){
    $altura = 1.75;
    $peso = 60;
    $ResultadoEsperado = "normal";

    $ResultadoExecutado = calcularIMC($altura, $peso);

    if($ResultadoEsperado == $ResultadoExecutado){
        echo "teste de normal ok <br/>";
    }else {
        echo "teste de normal deu erro <br/>";
    }
}
Testenormal( );
function sobrepeso( ){
    $altura = 1.75;
    $peso = 80;
    $ResultadoEsperado = "sobrepeso";

    $ResultadoExecutado = calcularIMC($altura, $peso);

    if($ResultadoEsperado == $ResultadoExecutado){
        echo "teste de sobrepeso ok <br/>";
    }else {
        echo "teste de sobrepeso deu erro <br/>";
    }
}
sobrepeso( );
function obesidade( ){
    $altura = 1.75;
    $peso = 100;
    $ResultadoEsperado = "obesidade";

    $ResultadoExecutado = calcularIMC($altura, $peso);

    if($ResultadoEsperado == $ResultadoExecutado){
        echo "teste de obesidade ok <br/>";
    }else { 
        echo "teste de obesidade deu errov<br/>";
    }
}
obesidade( );
function muitoobesa( ){
    $altura = 1.75;
    $peso = 150;
    $ResultadoEsperado = "obesidade grave";

    $ResultadoExecutado = calcularIMC($altura, $peso);

    if($ResultadoEsperado == $ResultadoExecutado){
        echo "teste de muito obesa ok <br/>";
    }else {
        echo "teste de muito obesa deu erro <br/>";
    }
}
muitoobesa( ) 
?>