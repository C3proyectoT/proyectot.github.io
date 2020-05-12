<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$age = $_POST['age'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$mesagge = $_POST['mesagge'];

	$mailTo = "damimelamed@gmail.com";
	$headers = "Email de:" .$mailFrom;
	$txt = "Contacto desde página MEIC de ".$name." de ".$age." años.\n\n".$mesagge;
	
	mail($mailTo, $subject, $txt, $headers);
	//header("Location: contact.html?mailsend");

}
?>