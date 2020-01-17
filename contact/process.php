<?php
$remitente = $_POST['email'];
$destinatario = 'juanjotorres_90@hotmail.com';
$asunto = 'Message from one.JO'; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Name: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Message: " . $_POST["mensaje"] . "\r\n";
	

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirmation.php'; 
}
?>
