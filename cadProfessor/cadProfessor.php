<?php

    // Verifica se foi passado um método e um ID
    if (isset($_GET['metodo']) && isset($_GET['id'])) {
        $metodo = $_GET['metodo'];
        $id = $_GET['id'];

        // Define a ação para recuperar um professor específico
        $acao = 'recuperarProfessor';
        require_once 'professor.controller.php';

        // Supondo que $professor seja um array com apenas um objeto retornado
        if (!empty($professor)) {
            $dados = $professor[0]; // pega o primeiro (e único) professor retornado
            $id = $dados->id;
            $nome = $dados->nome;
            $idade = $dados->idade;
            $disciplina = $dados->disciplina;
            $foto = $dados->foto;
            $_SESSION['foto'] = $foto;
        }
    }

    // Define a ação do formulário com base no método
    $acaoForm = 'inserir';
    if (isset($metodo)) {
        if ($metodo == 'alterar') {
            $acaoForm = 'alterar';
        } elseif ($metodo == 'excluir') {
            $acaoForm = 'excluir';
        }
    }
?>

<h1>Cadastro de Professor</h1>
<form name="form1" action="index.php?link=4&acao=<?= $acaoForm ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= isset($nome) ? $nome : '' ?>">
    </div>

    <div class="mb-3">
        <label>Idade</label>
        <input type="text" name="idade" class="form-control" value="<?= isset($idade) ? $idade : '' ?>">
    </div>

    <div class="mb-3">
        <label>Disciplina</label>
        <input type="text" name="disciplina" class="form-control" value="<?= isset($disciplina) ? $disciplina : '' ?>">
    </div>

    <div class="mb-3">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <?php if (isset($foto)) : ?>
        <img src="fotoProfessor/<?= $foto ?>" width="100" height="100">
    <?php endif; ?>

    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
    <input type="submit" class="btn btn-primary" value="<?= ucfirst($acaoForm) ?>">
</form>