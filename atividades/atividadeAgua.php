<?php

//Exibindo o menu para o usuário
echo "Escolha uma opção do menu:<br>";
echo "1 - Mensagem sobre o Dia Mundial da Água<br>";
echo "2 - Mensagem sobre o derretimento das geleiras<br>";
echo "3 - Mensagem sobre a importância do uso consciente da água<br>";
echo "<br>";

//Capturando a escolha do usuário
$opcao = 3;

//Verificando a opção escolhida e exibindo a mensagem 10 vezes
if($opcao === 1){
    $contador = 0;
    while($contador < 10){
        echo "O Dia Mundial da Água é celebrado em 22 de março, é importante preservar este recurso essencial para a vida.<br>";
        $contador++;
    }
}elseif($opcao === 2){
    $contador = 0;
    while($contador < 10){
        echo "O derretimento das geleiras é um dos maiores alertas das mudanças climáticas e exige ações urgentes.<br>";
        $contador++;
    }
}elseif($opcao === 3){
    $contador = 0;
    while($contador < 10){
        echo " O uso consciente da água é essencial para garantir que este recurso esteja disponível no furuto.<br>";
        $contador++;
    }
}else {
     echo " Opção inválida. Por favor, escolha uma opção válida.<br>";
    }
?>
