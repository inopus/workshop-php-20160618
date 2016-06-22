function enviaFormulario(){
	// Obter os dados digitados pelo usuário nos campos da tela
	var usuario_campo = document.getElementById("usuario").value;
	var senha_campo = document.getElementById("nome").value;
	var data = new FormData();
	data.append('usuario', usuario_campo);
	data.append('nome', senha_campo);
	var xhr = new XMLHttpRequest(); // Instancio um novo objeto XMLHttpRequest
	xhr.onreadystatechange = function() {
		// Verifico os estados da requisição (Por exemplo, se a requisição retornou êxito)
		if (xhr.readyState == 4 && xhr.status == 200) {
			alert(xhr.responseText); // Caso o retorno seja sucesso
		}
	};
	xhr.open("POST", "servico_post.php", true);
	xhr.send(data);
}