<?php
if (!empty($_POST['contato'])) {
	$dados = $_POST['contato'];
$to      = 'xnor.contato@gmail.com';
$subject = 'Contato pelo site';
$message = 'Olá, Sou: '. $dados[0] . ' ' . $dados[1] . ', Telefone: ' . $dados[2] . ' Meu email é:' . $dados[3].'Minha opniaão é:'.$dados[4];
$headers = 'From: '.$dados[0] . "\r\n" .
           'Reply-To: '.$dados[1] . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    $message = 'E-mail enviado com sucesso!';
    header('Location: '.'../sua_opiniao.php?message='.$message);
    die();
} else {
    die('Erro ao enviar e-mail.<a href="../sua_opiniao.php"> Voltar </a> <br>');
	
}
	
}

?>