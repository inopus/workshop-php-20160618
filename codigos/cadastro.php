<!doctype html>
<html>
<head>
    <title>Meu sistema de cadastro!</title>
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
        <img src="https://pbs.twimg.com/media/BrfXKvjCEAIZI_v.jpg" alt="You shall not pass" width="150"/>
		<h1>Cadastro</h1>
        <form action="cadastro2.php" method="post">
            <label for="usuario">Usuário</label>
            <br>
            <input type="text" name="usuario" id="usuario">
            <br>
            <label for="nome">Nome</label>
            <br>
            <input type="text" name="nome" id="nome">
            <br>
			<label for="senha">Senha</label>
            <br>
            <input type="text" name="senha" id="senha">
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>
</html>