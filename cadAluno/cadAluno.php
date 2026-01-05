<?php

    // Verifica se foi passado um método e um ID
    if (isset($_GET['metodo']) && isset($_GET['id'])) {
        $metodo = $_GET['metodo'];
        $id = $_GET['id'];

        // Define a ação para recuperar um aluno específico
        $acao = 'recuperarAluno';
        require_once 'aluno.controller.php';

        // Supondo que $aluno seja um array com apenas um objeto retornado
        if (!empty($aluno)) {
            $dados = $aluno[0]; // pega o primeiro (e único) aluno retornado
            $id = $dados->id;
            $nome = $dados->nome;
            $idade = $dados->idade;
            $serie = $dados->serie;
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

<h1>Cadastro de Aluno</h1>
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
        <label>Série</label>
        <input type="text" name="serie" class="form-control" value="<?= isset($serie) ? $serie : '' ?>">
    </div>

    <div class="mb-3">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <?php if (isset($foto)) : ?>
        <img src="fotoAluno/<?= $foto ?>" width="100" height="100">
    <?php endif; ?>

    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
    <input type="submit" class="btn btn-primary" value="<?= ucfirst($acaoForm) ?>">
</form>