<?php

//Comando do while
$x = 6;

do{
    echo "O número é: $x <br>";
    $x++;
}while($x <=5);

//Comando for
echo "</br>";
for ($x = 0; $x <=10; $x++){
    echo "O número é: $x <br>";
}

//Tabuada usando while
do{
    echo "<br>";
    echo"Tabuada do $x: <br>";
    
}while($x = $x*$x++);

//Tabuada usando for
echo "<br>";
echo"Tabuada do $x: <br>";
for($x = 0; $x <=10; $x++){
   $resultado = $x*$x++;
   echo "$x x "$x++"= $resultado <br>"
}
?>