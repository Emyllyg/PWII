<?php

// Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão).
// Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números
// 1 soma 2 sub 3 div 4 mult

$num1 = 4;
$num2 = 6;
$op = 2;

    switch($op){
        case 1:
            $res = $num1 + $num2;
            echo "$num1 + $num2 = $res";
        break;
        
        case 2:
            $res = $num1 - $num2;
            echo "$num1 - $num2 = $res";
        break;

        case 3:
            $res = $num1 / $num2;
            echo "$num1 / $num2 = $res";
        break;

        case 4:
            $res = $num1 * $num2;
            echo "$num1 x $num2 = $res";
        break;

        default:
            echo "Opção inválida";
        break;

    }
?>