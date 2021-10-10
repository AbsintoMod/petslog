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

	<h1 align="center">Solução Bucal Ibasa 100ml</h1><br>
	<br>
		<div id="compra">
			<form class="produto3">
				<img src="img/produto3.png" width = "370"	height = "350">
			</form>
			
			<form class="produto3_3">
				<p>Indicado para cães e gatos;</p>
				<li>Solução indicada para controlar e reduzir o mau hálito de seu pet;</li>
				<li>Não altera o sabor ou odor da água, evitando a recusa do animal;</li>
				<li>Seguro para o uso diário,</li>
				<li>O frasco vem com 100ml.</li>
			</form>
		</div>
		<form class="botao_comprar">
			<p>Valor: R$ 28,90</p>
			<br>
			<a href="compra.php"><img src="img/botao_comprar.gif" width = "300"	height = "100"></a>
		</form>
		<form class="forma_compra">
			<img src="img/forma_compra.png" width="300" height="60">
		</form>
		<div id="rodape">
			<img src="img/barra_titulo.png" width = "100%"	height = "150">
		</div>
		<div id="rodape1">
			<p>Direitos autorais © 2014 - 2018 Todos os Direitos Reservados</p>
		</div>
		<div id="vet">
			<img src="img/vet.png" width = "100"	height = "100">
		</div>
	</body>
</html>