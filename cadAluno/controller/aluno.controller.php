<?php
	require_once 'model/aluno.model.php';
	require_once 'service/aluno.service.php';
	require_once 'conexao/conexao.php';
	
	@$acao = isset($_GET['acao'])? $_GET['acao']:$acao; 
	

	if($acao == 'inserir'){
		$aluno = new Aluno();
		$aluno->__set('nome',$_POST['nome']);
		$aluno->__set('idade',$_POST['idade']);
		$aluno->__set('serie',$_POST['serie']);
		$aluno->__set('foto',$_FILES['foto']['name']);
			
		$conexao = new Conexao();
		
		$alunoService = new AlunoService($aluno, $conexao);
		$alunoService->inserir();
		
		header('location: index.php?link=1');
	}
	if($acao == 'recuperar'){
		$aluno = new Aluno();
		$conexao = new Conexao();
		
		$alunoService = new AlunoService($aluno, $conexao);
		$aluno= $alunoService->recuperar();
	}
	
	if ($acao == 'recuperarAluno') {
		$aluno = new Aluno();
		$conexao = new Conexao();
	
		$alunoService = new AlunoService($aluno, $conexao);
		$aluno = $alunoService->recuperarPorId($id);
	}
	
	if($acao == 'alterar'){
		$aluno = new Aluno();
		$aluno->__set('nome',$_POST['nome']);
		$aluno->__set('idade',$_POST['idade']);
		$aluno->__set('serie',$_POST['serie']);
		if($_FILES['foto']['name'] !=''){
	    	$aluno->__set('foto',$_FILES['foto']['name']);
		}else{
			$aluno->__set('foto',$_SESSION['foto']);	
		}
		$aluno->__set('id',$_POST['id']);

		$conexao = new Conexao();
		
		$alunoService = new AlunoService($aluno, $conexao);
		$alunoService->alterar();
		
		header('location: index.php?link=1');
	}
	if($acao == 'excluir'){
		$aluno = new Aluno();
		$aluno->__set('id',$_POST['id']);
				
		$conexao = new Conexao();
		
		$alunoService = new AlunoService($aluno, $conexao);
		$alunoService->excluir();
		
		header('location: index.php?link=1');
	}
	if($acao == 'pesquisar'){
		$aluno = new Aluno();
		$conexao = new Conexao();
		
		$alunoService = new AlunoService($aluno, $conexao);
		$aluno= $alunoService->pesquisar();
	}
