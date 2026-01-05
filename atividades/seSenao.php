<html>
    <head>
        <title>decisão</title>
    </head>
    <body>
        <?php
            $certo = false;
            echo 'comando if<br>';
            if($certo){
                echo 'verdade';
            }

            echo '<hr>';

            $certo = 'não';
            echo 'comando if<br>';
            if($certo == 'sim'){
                echo 'verdade';
            }

            echo '<hr>';
            $idade = 18;
            echo 'comando if else<br>';
            if($idade>=18){
                echo 'maior de idade';
            }else{
                echo 'menor de idade';
            }

            echo '<hr>';
            $salario = 2000;
            echo 'comando if else<br>';
            if($salario<=1999){
                $salario = ($salario * 1.20);
                echo $salario;
            }else{
                $salario = ($salario * 1.10);
                echo $salario;
            }
            
            echo '<hr>';
            $nota = 9;
            echo 'comando if else if<br>';
            if(($nota<0)||($nota>10)){
                echo 'nota inválida';
            }else if($nota>8){
                echo 'aprovado';
            }else if(($nota<=8)&&($nota>=4)){
                echo 'recuperação';
            }else{
                echo 'reprovado';
            }

            echo '<hr>';
            $num = 20;
            echo 'comando switch<br>';

            switch($num){
                case 1:
                echo 'um';
                break;

                case 2:
                    echo 'dois';
                    break;

                case 3:
                echo 'três';
                break;

                default:
                    echo 'opção inválida';
                break;
            }
            

        ?>
    </body>
</html>