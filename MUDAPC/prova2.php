<?php

function jokenpoVencedor($jogadorA, $jogadorB) {
    if (($jogadorA == "PAPEL" && $jogadorB == "PEDRA") || ($jogadorB == "PAPEL" && $jogadorA == "PEDRA")) {
        return "PAPEL VENCEU!<br/>";
    }

    if (($jogadorA == "PAPEL" && $jogadorB == "TESOURA") || ($jogadorB == "PAPEL" && $jogadorA == "TESOURA")) {
        return "TESOURA VENCEU!<br/>";
    }

    if (($jogadorA == "PEDRA" && $jogadorB == "TESOURA") || ($jogadorB == "PEDRA" && $jogadorA == "TESOURA")) {
        return "PEDRA VENCEU!<br/>";
    }

    return "EMPATE<br/>";
}
function TestePapelePedra(){
    $jogadorA = "PAPEL";
    $jogadorB = "PEDRA";
    $ResultadoEsperado ="PAPEL VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do Papel&Pedradeu certo<br/>";
        }else {
        echo "teste Pedra&Papel deu errado";
        }
}
TestePapelePedra();
function TestePedraEpapel2(){
    $jogadorA = "PEDRA";
    $jogadorB = "PAPEL";
    $ResultadoEsperado ="PAPEL VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do Pedra&Papel certo<br/>";
        }else {
        echo "teste Pedra&Papel deu errado";
        }
}
TestePedraEpapel2();
function TestePapelTesoura(){
    $jogadorA = "PAPEL";
    $jogadorB = "TESOURA";
    $ResultadoEsperado ="TESOURA VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do PAPEL&TESOURA certo<br/>";
        }else {
        echo "teste PAPEL&TESOURA deu errado<br/>";
        }
}
TestePapelTesoura();
function TestePapelTesoura2(){
    $jogadorA = "TESOURA";
    $jogadorB = "PAPEL";
    $ResultadoEsperado ="TESOURA VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do TESOURA&PAPEL certo<br/>";
        }else {
        echo "teste TESOURA&PAPEL deu errado<br/>";
        }
}
TestePapelTesoura2();
function TestePEDRAETESOURA(){
    $jogadorA = "PEDRA";
    $jogadorB = "TESOURA";
    $ResultadoEsperado ="PEDRA VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do PEDRA&TESOURA certo<br/>";
        }else {
        echo "teste PEDRA%TESOURA deu errado<br/>";
        }
}
TestePEDRAETESOURA();
function TestePEDRAETESOURA2(){
    $jogadorA = "TESOURA";
    $jogadorB = "PEDRA";
    $ResultadoEsperado ="PEDRA VENCEU!<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do TESOURA&PEDRA certo<br/>";
        }else {
        echo "teste TESOURA&PEDRA deu errado<br/>";
        }
}
TestePEDRAETESOURA2();
function EMPATE(){
    $jogadorA = "PEDRA";
    $jogadorB = "PEDRA";
    $ResultadoEsperado ="EMPATE<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do EMPATE PEDRA certo<br/>";
        }else {
        echo "teste EMPATE PEDRA deu errado<br/>";
        }
}
EMPATE();
function EMPATE2(){
    $jogadorA = "PAPEL";
    $jogadorB = "PAPEL";
    $ResultadoEsperado ="EMPATE<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do EMPATE PAPEL certo<br/>";
        }else {
        echo "teste EMPATE PAPEL deu errado<br/>";
        }
}
EMPATE2();
function EMPATE3(){
    $jogadorA = "TESOURA";
    $jogadorB = "TESOURA";
    $ResultadoEsperado ="EMPATE<br/>";

   $ResultadoExecutado = jokenpoVencedor($jogadorA , $jogadorB);
    
    if ($ResultadoEsperado == $ResultadoExecutado){
        echo "Teste do TESOURA PAPEL certo<br/>";
        }else {
        echo "teste EMPATE TESOURA deu errado<br/>";
        }
}
EMPATE3();












?>