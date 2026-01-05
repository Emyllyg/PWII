<?php

// Algoritimo que recebe valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela "4 5".

$a = 5;
$b = 4;

if($a>=$b){
    echo $b. ' '.$a;
}else{
    echo $a. ' '.$b;
}

echo '<hr>';

// Solicite a entrada de um número e descubra se um número digitado é par ou impar.

$num = 4;
$teste = $num%2;

echo 'resto: '.$teste. '<br>';

if($teste == 0){
    echo 'par';
}else{
    echo 'impar';
}

?>