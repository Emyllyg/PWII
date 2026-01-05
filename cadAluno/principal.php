  <?php
    $acao = 'pesquisar';
    require_once 'aluno.controller.php';
  ?>
  <div class="row">
    <?php foreach($aluno as $indice =>$aluno) { ?>
    <div class="col">
        <div class="card" style="width: 100%;">
        <img src="fotoAluno/<?= $aluno->foto;?>" height="300"  class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=  $aluno->nome;?></h5>
            <p class="card-text"><?= $aluno->idade;?></p>
            <p class="card-text"><?= $aluno->serie;?></p>
            <a href="#" class="btn btn-primary">Conferir</a>
        </div>
        </div>
    </div>
    <?php } ?>
  </div>
 