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

	<h1 align="center">Flunixina 5mg c/ 10 Comprimidos</h1><br>
	<br>
		<div id="compra">
			<form class="produto2">
				<img src="img/produto2.png" width = "600"	height = "450">
			</form>
				<form class="produto2_2">
					<p>DESCRIÇÃO:</p>
						<p>Flunixina é um anti-inflamatório não esteróide, não narcótico que apresenta potente ação analgésica e antitérmica e antiendotóxica. É indicado para cães em:</p><br>

						<li>REUMATOLOGIA: Nas afecções agudas e crônicas do aparelho locomotor como: artrite não infecciosa, artrose,osteocondrite,tendinite e periatrites,miosites,displasia,coxo-femural,entorses,degeneração cartilaginosa;</li><br>
						<li>OFTALMOLOGIA: Conjuntivites alérgicas ou traumáticas, queratite, neovascularização da córnea, uveíte anterior isolada ou recidivante, corioretinite e panoftalmia.</li><br>
						<li>FLUNIXINA COMPRIMIDO DE 5 E 20 MG: É muito eficaz no tratamento dos traumatismos do globo ocular e na preparação cirúrgica do olho.</li><br>
						<li>CHOQUE ENDOTÓXICO E SEPTICEMIAS: Combate os efeitos do choque endotóxico, principalmente na espécie canina, melhorando o débito cardíaco e a função respiratória, diminuindo a hemoconcentração e proporcionando a analgesia necessária. 
						<li>PNEUMOLOGIA: Combate a inflama ão que é o elemento dominante da patogenia das broncopneumonias.</li><br>
						<li>PÓS-OPERATÓRIO: Não atrasa a cicatrização e seu efeito analgésico é benéfico para combater as dores pós-cirúrgicas e a inflamação.</li><br>
			</form>
		</div>
		<form class="botao_comprar">
			<p>Valor: R$ 60,00</p>
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