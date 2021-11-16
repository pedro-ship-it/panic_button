<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
}

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'botaopanico2021@gmail.com';
	$mail->Password = 'Robotica2021*';
	$mail->Port = 587;

	$mail->setFrom('botaopanico2021@gmail.com');
	$mail->addAddress('pedro.chenrique15@gmail.com');
	$mail->addAddress('hmcfuchs@gmail.com');


	$mail->isHTML(true);
	$mail->Subject = 'PEDIDO DE SOCORRO!';
	$mail->Body = "<a>" . $_SESSION['nome'] . ' está sendo perseguido ou até mesmo atacado!<strong><br>Sua localização atual é: Longitude IBGE: -49.269978 - Latitude IBGE: -25.4490446 <br> Aproximadamete na: Rua Nunes Machado, Rebouças, Curitiba, Paraná- CEP 80220070</strong>"</a>"';
	$mail->AltBody = 'Larifree';

	if($mail->send()) {
	?>
		<div class="sucesso">E-mail enviado com sucesso!</div>
	<?php
	
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>

