<!doctype html>
<html>
<head>
    <title>Meu sistema de login!</title>
    <style>
        body {
            background-color: #E3E3E3;
            font-family: verdana;
        }
        #caixaLogin {
            width: 450px;
            height: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -225px;
            margin-left: -225px;
            border: 1px solid #000000;
            text-align: center;
            border-radius: 1em;
            background-color: #CCCCCC;
        }
        #caixaLogin img {
            margin-top: 1em;
            border-radius: 1em;
        }
        #caixaLogin form {
            margin-top: 1em;
        }
        #caixaLogin form input[type="text"] {
            width: 15em;
            height: 2em
        }
        #caixaLogin form input[type="submit"] {
            margin-top: 1em;
            width: 15em;
        }
    </style>
</head>

<body>
    <section id="caixaLogin">
        <img src="https://ihatehongkong2.files.wordpress.com/2014/06/4488876837_8d3da2423a_z.jpg" alt="You shall not pass" width="220"/>
		<h1>Login</h1>
        <?php
			session_start();
			if($_SESSION["usuario_logado"]){
				?>
				Você já está logado como <?=$_SESSION["usuario_logado"]["nome"]?><br>
				<button onclick="location.href = 'sair.php'">Deslogar</button>
				<?php
			} else {
				?>
				<form action="login2.php" method="post">
					<label for="usuario">Usuário</label>
					<br>
					<input type="text" name="usuario" id="usuario">
					<br>
					<label for="senha">Senha</label>
					<br>
					<input type="text" name="senha" id="senha">
					<br>
					<input type="submit" value="Entrar">
				</form>
				<?php
			}
		?>
    </section>
</body>
</html>