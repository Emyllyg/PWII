<?php

$pontos = array(
    array(1,'Andre',12),
    array(2,'Ricardo',14),
    array(3,'Marcela',16),
);

for($L=0;$L<3;$L++){

    echo '<br>';
    for($c=0;$c<3;$c++){
        echo $pontos [$L] [$c]. ' ' ;
    }
}


?>