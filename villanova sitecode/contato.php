<?php

require_once('phpmailer/class.phpmailer.php');

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$assunto = trim($_POST['assunto']);
$cond = trim($_POST['cond']);
$end = trim($_POST['end']);
$bairro = trim($_POST['bairro']);
$cidade = trim($_POST['cidade']);
$tel = trim($_POST['telefone']);
$mensagem = trim($_POST['mensagem']);

$enviar = $_POST['enviar'];

if($enviar)
{
		$conteudo = "Nome: $nome \n";
		$conteudo .= "Email: $email \n";
		$conteudo .= "Assunto: $assunto \n";
		$conteudo .= "Nome do Condomínio: $cond \n";
		$conteudo .= "Endereço: $end \n";
		$conteudo .= "Numero: $num \n";
		$conteudo .= "Bairro: $bairro \n";
		$conteudo .= "Cidade: $cidade \n";
		$conteudo .= "Telefone: $tel \n\n";
		$conteudo .= "Mensagem: $mensagem \n";

		$assunto = "Contato Site Villa Nova";
		
		$email_des = 'alberto.roque097@gmail.com';

		$sending = mail($email_des,$assunto,$conteudo,"From: $nome <$email>");

		if($sending)
		{
			echo "Mensagem enviada com sucesso!";
			echo "<script>alert(\"Mensagem enviada com sucesso!\")</script>";
			echo "<script>window.location = \"index.html\"</script>";
		}else{
			echo "<p><b>$nome</b><br />Ouve um erro no envio, desculpe-nos pelo transtorno!</p>";
		}
	}
?> 
								
						