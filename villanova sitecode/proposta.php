<html>
<head>
		<title>Proposta</title>
		
		<link rel="stylesheet" href="style2.css" content="text/css">
		<link rel="stylesheet" href="pure/pure-min.css">

		<link rel="shortcut icon" href="img/ico.ico" type="image/x-icon" />
		
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		
		<meta content="Villa Nova Condomínios - Assessoria Condominial" name="description">
		
		<meta name="author" content="R'N'R WebDesign">
		
		<meta name="keywords" content="villa nova, administradora, condominio, rh, gestao, assessoria condonomial">

		<!--FONTS AWESOME-->
		<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">		

		<!--CSS MOBILE-->
			<link rel="stylesheet" href="cssmobile/style2m.css" media="(max-width: 820px)">
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="assets/js/jquery-1.9.1.min.js"></script> 
		<script>
    	$(document).ready(function() {	     	
	    	//MENU MOBILE
				var alterna = function(event){
					event.preventDefault();
					$("#menumobile").fadeToggle();
				};
				$("#escondemenu").click(alterna);
		});
		</script>	
	 
</head>
<body>
	<div class="navbar">
		<a href="index.html"><img src="img/villanovalogo2.png" alt="villalogo" /></a>	
			<ul>
				<li><a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a></li>
				<li><a href="empresa.html"><i class="fa fa-building fa-fw"></i> A Empresa</a></li>
				<li><a href="servico.html"><i class="fa fa-bar-chart"></i> Serviços</a></li>				
				<li><a href="proposta.php"><i class="fa fa-envelope-o"></i> Proposta</a></li>				
				<li><a href="contato.html"><i class="fa fa-phone"></i> Contato</a></li>
			</ul>

			<div id="navmobile">
				<a href="" id="escondemenu">
					<img src="img/navmobile.png">
				</a>
			</div>
	</div> 	
	<div id="menumobile">
		<ul>
			<li><a class="menua" href="index.html">Home</a></li>
			<li><a class="menua" href="empresa.html">A Empresa</a></li>				
			<li><a class="menua" href="servico.html">Serviços</a></li>				
			<li><a class="menua" href="proposta.php">Proposta</a></li>
			<li><a class="menua" href="contato.html">Contato</a></li>
		</ul>
	</div>
			<br><br><br><br><br><br>
			<div id="titleproposta">
				<h2>Solicite uma proposta.</h2>
				<p>Em toda sua estrutura a Villa Nova tem os melhores profissionais que irão lhe proporcionar um atendimento de extrema qualidade. 
				Preencha os dados a seguir e receba em breve nossa proposta.</p>
				<p>
				(*) são campos obrigatórios</p>
			</div>
			
			<!-- 			
			FORMULÁRIO PROPOSTA			
			-->		
			<div id="formproposta">
			
			<form action="enviar.php" method="post" class="pure-form pure-form-aligned">
				
				<!--TIPO EDIFICIO-->
				<div class="pure-control-group">
                <label for="tipo">Tipo Condomínio:</label>
                	<select id="tipo" name="tipo" class="pure-input-1-2">
                    	<option>Residencial Vertical</option>
                    	<option>Residencial Horizontal</option>
                    	<option>Comercial</option>
                    	<option>Misto</option>
                	</select>
            	</div>
            	<BR>
            	<!--NOME EDIFICIO-->	
				 <div class="pure-control-group">
					<label for="nomeed">Nome do Edifício:*</label>
					<input id="nomeed" name="nomeed" size="31" type="text" value="<?echo $nomeed ;?>" /><br />
				</div>

				<!--EMAIL-->	
				<div class="pure-control-group">
					<label for="email">Email:*</label>
					<input id="email" name="email" size="31" type="text" value="<?echo $email ;?>" /><br />
				</div>

				<!--ENDEREÇO-->	
				<div class="pure-control-group">
					<label for="end">Endereço:*</label>
					<input id="end" name="end" size="31" type="text" value="<?echo $end ;?>" /><br />
				</div>

				<!--NÚMERO-->
				<div class="pure-control-group">
					<label for="num">Número:*</label>
					<input id="num" name="num" size="15" type="text" value="<?echo $num ;?>" /><br />
				</div>

				<!--BAIRRO-->
				<div class="pure-control-group">
					<label for="bairro">Bairro:</label>
					<input id="bairro" name="bairro" size="31" type="text" value="<?echo $bairro ;?>" /><br />
				</div>

				<!--CIDADE-->
				<div class="pure-control-group">
					<label for="cidade">Cidade:</label>
					<input id="cidade" name="cidade" size="31" type="text" value="<?echo $cidade ;?>" /><br />
				</div>

				<!--ESTADO-->
				<div class="pure-control-group">
					<label for="estado">Estado:</label>
					<input id="estado" name="estado" size="31" type="text" value="<?echo $estado ;?>" /><br />
				</div>

				<!--NOME-->
				<div class="pure-control-group">
					<label for="nome">Seu Nome:</label>
					<input id="nome" name="nome" size="31" type="text" value="<?echo $nome ;?>" /><br />
				</div>

				<!--TELEFONE-->
				<div class="pure-control-group">
					<label for="tel">Telefone:*</label>
					<input id="tel" name="tel" size="31" type="text" value="<?echo $tel ;?>" /><br />
				</div>

				<!--NOME SÍNDICO-->
				<div class="pure-control-group">
					<label for="nomesin">Nome do Síndico:*</label>
					<input id="nomesin" name="nomesin" size="31" type="text" value="<?echo $nomesin ;?>" /><br />
				</div>

				<!--TELEFONE PORTARIA-->
				<div class="pure-control-group">
					<label for="telpor">Telefone da Portaria:</label>
					<input id="telpor" name="telpor" size="31" type="text" value="<?echo $telpor ;?>" /><br />
				</div>

				<!--VALOR DA ÚLTIMA TAXA CONDONOMIAL-->
				<div class="pure-control-group">
					<label for="valor">Valor da última taxa condominial:*</label>
					<input id="valor" name="valor" size="31" type="text" value="<?echo $valor ;?>" /><br />
				</div>

				<!--NUM TOTAL DE APARTAMENTOS-->
				<div class="pure-control-group">
					<label for="numapart">Número Total de Apartamentos:*</label>
					<input id="numapart" name="numapart" size="31" type="text" value="<?echo $numapart ;?>" /><br />
				</div>

				<!--NUMERO DE TORRES-->
				<div class="pure-control-group">
					<label for="numtorre">Número de Torres:*</label>
					<input id="numtorre" name="numtorre" size="31" type="text" value="<?echo $numtorre ;?>" /><br />
				</div>

				<!--NOME EDIFICIO-->
				<div class="pure-control-group">
					<label for="numfunc">Número de Funcionários:*</label>
					<input id="numfunc" name="numfunc" size="31" type="text" value="<?echo $numfunc ;?>" /><br />
				</div>

				<div class="pure-control-group">
                <label for="ter">Terceirizado:</label>
                	<select id="ter" name="ter" class="pure-input-1-2">
                    	<option>Sim</option>
                    	<option>Não</option>                    
                	</select>
            	</div>
	
				<br>								
				<!--BOTAO-->
				<input class="bottom2" name="enviar" type="submit" value="Enviar" class="botao"/>	
															
			</form>
			</div>

			<div id="formfoto">
				<img src="img/home3.jpg">
			</div>
	
		<div id="rodape">	
			<div id="rodtext">
				<h2>Produção</h2>
				<p>Villa Nova Assessoria Condonomial Ltda. | @2015 Todos os direitos reservados<p>
				<p><a href="http://www.rnrwebdesign.com.br" target="_blank">Uma produção de R'N'R WebDesign</a></p>
			</div>
			<div id="rodtext2">
				<h2>Contato</h2>
				<p>Av. Suplicy, 156 - Jd. Santa Mena Guarulhos, SP </p>
				<p>Tel: (11)  4964.8899</p>
			</div>
		</div>
	
</body>
</html>