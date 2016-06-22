<?php 
	require("conexao_bd.php");
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$nome = $_POST["nome"];

	$sql = "INSERT INTO usuario (usr, sen, nome) VALUES ('" . $usuario . "','" . $senha . "','" . $nome . "')";

	if(mysqli_query($conexao, $sql)) {
		echo "Cadastrado com sucesso";
	} else {
		echo "Houve um erro";
	}
?>