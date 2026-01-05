<?php

echo "<h1>Atividade Data e Hora</h1>";

echo "Hoje é " . date("Y/m/d") . "<br>";
echo "Hoje é " . date("Y.m.d") . "<br>";
echo "Hoje é " . date("Y-m-d") . "<br>";
echo "Hoje é " . date("l") ;

echo '<hr>';

echo date("Y");

echo '<hr>';

echo "A hora é " . date("h:i:sa");

echo '<hr>';

date_default_timezone_set("America/Sao_Paulo");
echo "A hora é ". date("h:i:sa");

echo '<hr>';

$d=mktime(10,30,46,11,20,2025);
echo "A data da criação é " . date("Y-m-d h:i:sa", $d);

echo '<hr>';

$d2=strtotime("12:52am Junho 10 2025");
echo "A data da criação é " . date("Y-m-d h:i:sa", $d2);

echo '<hr>';

$d3=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d3) . "<br>";

echo '<hr>';

$d4=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d4) . "<br>";

echo '<hr>';

$d5=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d5) . "<br>";

echo '<hr>';

$datainicial = strtotime("Saturday");
$datafinal = strtotime("+6 Weeks", $datainicial);

while($datainicial < $datafinal){
    echo date("M d", $datainicial) . "<br>";
    $datainicial = strtotime("+1 Week", $datainicial);
}

echo '<hr>';

$id6 = strtotime("November 20");
$id7 = ceil(($id6-time())/60/60/24);
echo "Faltam " . $id7 . " dias até 20 de Novembro.";

?>