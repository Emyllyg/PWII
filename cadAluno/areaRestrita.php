<?php
	$acao = 'recuperar';
	require_once 'aluno.controller.php';
?>
<h1>Área restrita</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Aluno</th>
      <th scope="col">Foto</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php foreach($aluno as $indice =>$aluno){ ?>
    <tbody>
      <tr>
        <td><?= $aluno->nome;?></td>
        <td><img src="fotoaluno/<?= $aluno->foto;?>" width="40" height="40"></td>
        <td><a href="index.php?link=2&metodo=alterar&id=<?= $aluno->id;?>">Alterar</a></td>
        <td><a href="index.php?link=2&metodo=excluir&id=<?= $aluno->id;?>">Excluir</a></td>
      </tr>
    </tbody>
  <?php } ?>
</table>