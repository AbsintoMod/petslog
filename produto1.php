<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/styleprod.css"/>
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
	<form>
		<img src="img/promocao.gif" width = "100%"	height = "90%">
	</form>
	<h1 align="center">PetTest Animal</h1><br>
	<br>
		<div id="compra">
			<form class="produto1">
					<img src="img/produto1.png" width = "650"	height = "550">
			</form>
	
			<form class="produto1_1">
					<p>DESCRIÇÃO:</p>
						<p>Este Pet Meter oferece resultados rápidos e precisos!</p><br>
						<p>Medidor de glicose no sangue Advocate® PetTest Diabetic.</p><br>
						<br>
					    	<p>O Medidor de Glicose no Sangue Advocate's® PetTest é um medidor de teste de glicemia fácil de usar para cães e gatos. Com tempo de teste rápido e amostras pequenas, os usuários podem testar os níveis de glicose no sangue de seus amigos caninos e felinos. O PetTest Meter pode armazenar até 400 resultados de testes e fornecer médias de 7, 14 e 28 dias de ciclo. Além disso, também possui 4 configurações de alarmes, um indicador de bateria fraca e uma função de desligamento automático.</p><br>

							<p>Atenção! PetTest Meter é para uso somente com as Tiras de Teste PetTest. Outras tiras de teste podem produzir resultados imprecisos.</p><br>
			</form>
		</div>
		<form class="botao_comprar">
			<p>Valor: R$189,90</p>
			<br>
			<a href="compra.php"><img src="img/botao_comprar.gif" width = "300"	height = "100"></a>
		</form>
		<form class="forma_compra">
			<img src="img/forma_compra.png" width="300" height="60">
		</form> 
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