<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>PeTsHOp</title>
		<link rel='shortcut icon' href="img/icon.png"/>
	</head>
		
		<div id="img_title">
			<img src="img/barra_titulo.png" alt="title" width = "100%"	height = "100">
		</div>
		
		<div id="img_logo">
			<a href="index.php"><img src="img/Logo.png" alt="logo" width = "220" height = "110"></a>
		</div>
	
	<body>
		<div id="tabela_menu">
		<td>
			<tr>
				<a href="cadastro.php"><img src="img/bota_cadastro.png" width="183" height="88"></a>	
			</tr>
			<tr>
				<a href="produto.php"><img src="img/bota_produtos.png" width="183" height="88"></a>
			</tr>
			<tr>
				<a href="servico.php"><img src="img/bota_serviços.png" width="183" height="88"></a>
			</tr>
			<tr>
				<div id="logingeral">
					<form name="cad" method="POST" action="php/login.php">
						<label>Login:</label><br>
						<input type="text" name="nmUSER"/><input type="submit" name="nmVALIDAR" value="Entrar"/><br>
						<label>Senha:</label><br>
						<input type="password" name="nmSENHA"/><a href="cadastro.php">Cadastrar-se</a>
						<br>
						<br>
						<br>
					</form>
				</div>				
			</tr>
		</td>
		</div>

			<h1 align="center">Bem Vindo</h1><br>
			<br>
			<p align="center">Cadastro realizado com sucesso!</p><br>
			<br>
			
			<a href="index.php"><img src="img/logo.png" class="volta"></a>
		
		<div id="rodape">
			<img src="img/barra_titulo.png" alt="title" width = "100%"	height = "150">
		</div>
		<div id="rodape1">
			<p>Direitos autorais © 2014 - 2018 Todos os Direitos Reservados</p>
		</div>
		<div id="vet">
			<img src="img/vet.png" width = "100"	height = "100">
		</div>
	</body>
</html>