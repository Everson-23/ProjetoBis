<?php

$nome =   isset( $_POST['nome'] ) ? $_POST['nome'] : '';
$telefone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
$email  =   isset( $_POST['email'] ) ? $_POST['email'] : '';S
$mensagem =  isset( $_POST['message'] ) ? $_POST['message'] : '';
$conteudo = '
						<html>
						<head>
							<title></title>
						</head>
						<body>
							 <h2>Você recebeu uma mensagem através da página de contatos</h2>
							 <p>'.$nome. ' Ele lhe enviou a seguinte mensagem:<br></p>

							 <p>'.$mensagem. ' <br><br> Você pode entrar em contato com a pessoa para e-mail: '.$email.'</p>
							 <br>ou com o telefone: '.$telefone.'
							 
							 <hr>
							 
							 
						</body>
						</html>';


// Configuración de los encabezados
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Enviar correo
$envio = mail('phbasilio001@gmail.com', $asunto, $conteudo, $headers);

header("Location:index.php");



