<?php 


header("Content-type: application/json");

include("filho.php"); //Inclui dentro do seu arquivo 

$Pessoa = new Pessoa("Jean", 75.0, 26, 1.80);
//echo "<br>".$Pessoa ->__TOSTRING()."<br>";

$filho = new Filho("Jean Carlos", 80.0, 25, 1.95);
/*echo $filho;
$filho -> setTimeDoCoracao("Atlético Mineiro - GALO");
echo "<br>".$filho -> getTimeDoCoracao()."<br>"; */

$filho -> setTimeDoCoracao("Atletico Mineiro - GALO");

/*if($filho -> getTimeDoCoracao() == "Atletico Mineiro - GALO"){
	http_response_code(200);
	echo json_encode($filho);
}
else{
	http_response_code(404);
	$resposta = array("Time do Coracao" => "Nao Existe");
		echo json_encode($resposta); 
} */


$filho -> findAll();
?>