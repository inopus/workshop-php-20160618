<?php 
	require("conexao_bd.php");
	
	session_start();
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$sql = "SELECT * FROM usuario WHERE usr = '" . $usuario . "' AND sen = '" . $senha . "'";

	$result = mysqli_query($conexao, $sql);

	if(mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$_SESSION["usuario_logado"] = $row;
		echo "Bem vindo - " . $_SESSION["usuario_logado"]["nome"];
	} else {
		echo "Usuário ou senha incorretos";
	}
	
	mysqli_close($conexao);
?>