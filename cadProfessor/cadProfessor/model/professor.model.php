<?php
class Professor{
	private $id;
	private $nome;
	private $idade;
	private $disciplina;
	private $foto;
	
	public function __get($atributo){
		return $this->$atributo;
	}
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
	}
}
?>