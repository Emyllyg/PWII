<?php$media = ($_GET [' notal'] + $_GET ['nota2']) / 2;
$nome = $_GET['nome'];
if ($media >= 7) {
    print ("aluno $nome aprovado com a media $media");
}
else {
    print ("aluno $nome reprovado com a media $media");
}
?>