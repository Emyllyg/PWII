<?php
	require_once 'model/professor.model.php';
	require_once 'service/professor.service.php';
	require_once 'conexao/conexao.php';
	
	@$acao = isset($_GET['acao'])? $_GET['acao']:$acao; 
	

	if($acao == 'inserir'){
		$professor = new Professor();
		$professor->__set('nome',$_POST['nome']);
		$professor->__set('idade',$_POST['idade']);
		$professor->__set('disciplina',$_POST['disciplina']);
		$professor->__set('foto',$_FILES['foto']['name']);
			
		$conexao = new Conexao();
		
		$professorService = new ProfessorService($professor, $conexao);
		$professorService->inserir();
		
		header('location: index.php?link=1');
	}
	if($acao == 'recuperar'){
		$professor = new Professor();
		$conexao = new Conexao();
		
		$professorService = new ProfessorService($professor, $conexao);
		$professor= $professorService->recuperar();
	}
	
	if ($acao == 'recuperarProfessor') {
		$professor = new Professor();
		$conexao = new Conexao();
	
		$professorService = new ProfessorService($professor, $conexao);
		$professor = $professorService->recuperarPorId($id);
	}
	
	if($acao == 'alterar'){
		$professor = new Professor();
		$professor->__set('nome',$_POST['nome']);
		$professor->__set('idade',$_POST['idade']);
		$professor->__set('disciplina',$_POST['disciplina']);
		if($_FILES['foto']['name'] !=''){
	    	$professor->__set('foto',$_FILES['foto']['name']);
		}else{
			$professor->__set('foto',$_SESSION['foto']);	
		}
		$professor->__set('id',$_POST['id']);

		$conexao = new Conexao();
		
		$professorService = new ProfessorService($professor, $conexao);
		$professorService->alterar();
		
		header('location: index.php?link=1');
	}
	if($acao == 'excluir'){
		$professor = new Professor();
		$professor->__set('id',$_POST['id']);
				
		$conexao = new Conexao();
		
		$professorService = new ProfessorService($professor, $conexao);
		$professorService->excluir();
		
		header('location: index.php?link=1');
	}
	if($acao == 'pesquisar'){
		$professor = new Professor();
		$conexao = new Conexao();
		
		$professorService = new ProfessorService($professor, $conexao);
		$professor= $professorService->pesquisar();
	}
