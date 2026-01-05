  <?php
    $acao = 'pesquisar';
    require_once 'professor.controller.php';
  ?>
  <div class="row">
    <?php foreach($professor as $indice =>$professor) { ?>
    <div class="col">
        <div class="card" style="width: 100%;">
        <img src="fotoProfessor/<?= $professor->foto;?>" height="300"  class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=  $professor->nome;?></h5>
            <p class="card-text"><?= $professor->idade;?></p>
            <p class="card-text"><?= $professor->disciplina;?></p>
            <a href="#" class="btn btn-primary">Conferir</a>
        </div>
        </div>
    </div>
    <?php } ?>
  </div>
 