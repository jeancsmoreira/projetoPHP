<?php 

include ("conexao.php");
class Pessoa extends conexao implements JsonSerializable { 
	
	private $nome;
	private $peso;
	private $idade;
	private $altura;
		
	public function __CONSTRUCT($nome,$peso,$idade,$altura){ //Construtor 
		
		$this -> nome = $nome;
		$this -> peso = $peso;
		$this -> idade = $idade;
		$this -> altura = $altura;
	}

	public function __TOSTRING(){ //Método ToString
		$string = 
			"Nome: ".$this -> nome. "<br>".
			"Peso: ".$this -> peso. "<br>".
			"Idade: ".$this -> idade. "<br>".
			"Altura: ".$this -> altura. "<br>";

			return $string;

	}
	
	
	public function setnome($nome){
		
		$this -> nome = $nome;
	}
	
	public function getnome(){
		
	 	return $this ->nome . "<br>";
	}

	public function setaltura($altura){
		
		$this -> altura = $altura;
	}
	
	public function getaltura(){
		
	 	return $this ->altura . "<br>";
	}
	
	public function setidade($idade){
		
		$this -> idade = $idade;
	}
	
	public function getidade(){
		
	 	return $this ->idade . "<br>";
	}
	
		public function setpeso($peso){
		
		$this -> peso = $peso;
	}
	
	public function getpeso(){
		
	 	return $this ->peso . "<br>";
	}

	public function JsonSerialize() {

		return[
			

				"Nome" => $this -> nome,
				"Idade" => $this -> idade,
				"Altura" => $this -> altura,
				"Peso" => $this -> peso

		];

	}

	public function findAll(){
		$sql = "SELECT *FROM conteudo";
		$consulta = Conexao::prepare($sql);
		$consulta -> execute();
		return $consulta -> fetchAll();
		}



	}
