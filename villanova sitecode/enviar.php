<?php

require_once('phpmailer/class.phpmailer.php');

$tipo = trim($_POST['tipo']); /*TIPO DE CONDOMINIO*/
$nomeed = trim($_POST['nomeed']); /*CONDOMINIO*/
$email = trim($_POST['email']); /*EMAIL*/
$end = trim($_POST['end']); /*ENDEREÇO*/
$num = trim($_POST['num']); /*NUMERO*/
$bairro = trim($_POST['bairro']);
$cidade = trim($_POST['cidade']);
$estado = trim($_POST['estado']);
$nome = trim($_POST['nome']);
$tel = trim($_POST['tel']); /*TELEFONE*/
$nomesin = trim($_POST['nomesin']); /*NOME SINDICO*/
$telpor = trim($_POST['telpor']);
$valor = trim($_POST['valor']); /*VALOR TAXA*/
$numapart = trim($_POST['numapart']); /*NUMERO APARTAMENTOS*/
$numtorre = trim($_POST['numtorre']); /*NUMERO TORRES*/
$numfunc = trim($_POST['numfunc']); /*NUMERO FUNCIONARIOS*/
$ter = trim($_POST['ter']); /*OPÇÃO TERCEIRIZADO SIM OU NAO*/

$enviar = $_POST['enviar'];

$erros = 1;

if($enviar)
{
	if($nomeed == "")
	{$erros++;echo "<small class=\"erro\">O Campo Nome do Edificio esta vazio</small><br />";}

	if($email == "")
	{$erros++;echo "<small class=\"erro\">O Campo Email esta vazio</small><br />";}

	if($end == "")
	{$erros++;echo "<small class=\"erro\">O Campo Endereco esta vazio</small><br />";}

	if($num == "")
	{$erros++;echo "<small class=\"erro\">O Campo Numero esta vazio</small><br />";}

	if($tel == "")
	{$erros++;echo "<small class=\"erro\">O Campo Telefone esta vazio</small><br />";}

	if($nomesin == "")
	{$erros++;echo "<small class=\"erro\">O Campo Nome do Sindico esta vazio</small><br />";}

	if($valor == "")
	{$erros++;echo "<small class=\"erro\">O Campo Valor da Taxa Condominial esta vazio</small><br />";}

	if($numapart == "")
	{$erros++;echo "<small class=\"erro\">O Campo Numero de Apartamentos esta vazio</small><br />";}

	if($numtorre == "")
	{$erros++;echo "<small class=\"erro\">O Campo Numero de Torres esta vazio</small><br />";}

	if($numfunc == "")
	{$erros++;echo "<small class=\"erro\">O Campo Numero de Funcionarios esta vazio</small><br />";}

	if(erro <= 1)
	{
		$conteudo = "Nome: $nomeed \n";
		$conteudo .= "Tipo Condominio: $tipo \n";
		$conteudo .= "Email: $email \n";
		$conteudo .= "Endereço: $end \n";
		$conteudo .= "Numero: $num \n";
		$conteudo .= "Bairro: $bairro \n";
		$conteudo .= "Cidade: $cidade \n";
		$conteudo .= "Estado: $estado \n";
		$conteudo .= "Nome: $nome \n";
		$conteudo .= "Telefone: $tel \n";
		$conteudo .= "Nome do Síndico: $nomesin \n";
		$conteudo .= "Telefone Portaria: $telpor \n";
		$conteudo .= "Valor da Ultima Taxa Condomínial: $valor \n";
		$conteudo .= "Numero de Apartamentos: $numapart \n";
		$conteudo .= "Numero de Torres: $numtorre \n";
		$conteudo .= "Numero de Funcionários: $numfunc \n";
		$conteudo .= "Terceirizado: $ter \n";

		$assunto = "Proposta Site Villa Nova";
		
		$email_des = 'alberto.roque097@gmail.com';

		$sending = mail($email_des,$assunto,$conteudo,"From: $nomeed <$email>");

		if($sending)
		{
			echo "Mensagem enviada com sucesso!";
			echo "<script>alert(\"Sucesso!\")</script>";
			echo "<script>window.location = \"contato.html\"</script>";
		}
		else
		{
			echo "<p><b>$nome</b><br />Ouve um erro no envio, desculpe-nos pelo transtorno!</p>";
		}
	}

}?> 
								
						