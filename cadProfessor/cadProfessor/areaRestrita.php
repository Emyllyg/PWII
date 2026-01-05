<?php
	$acao = 'recuperar';
	require_once 'professor.controller.php';
?>
<h1>Área restrita</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Professor</th>
      <th scope="col">Foto</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php foreach($professor as $indice =>$professor){ ?>
    <tbody>
      <tr>
        <td><?= $professor->nome;?></td>
        <td><img src="fotoprofessor/<?= $professor->foto;?>" width="40" height="40"></td>
        <td><a href="index.php?link=2&metodo=alterar&id=<?= $professor->id;?>">Alterar</a></td>
        <td><a href="index.php?link=2&metodo=excluir&id=<?= $professor->id;?>">Excluir</a></td>
      </tr>
    </tbody>
  <?php } ?>
</table>