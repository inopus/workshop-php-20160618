function enviaFormulario(){
	// Obter os dados digitados pelo usuário nos campos da tela
	var usuario_campo = document.getElementById("usuario").value;
	var nome_campo = document.getElementById("nome").value;
	var xhr = new XMLHttpRequest(); // Instancio um novo objeto XMLHttpRequest
	xhr.onreadystatechange = function() {
		// Verifico os estados da requisição (Por exemplo, se a requisição retornou êxito)
		if (xhr.readyState == 4 && xhr.status == 200) {
			alert(xhr.responseText); // Caso o retorno seja sucesso
		}
	};
	xhr.open("GET", "servico_get.php?usuario=" + usuario_campo + "&nome=" + nome_campo, true);
	xhr.send();
}