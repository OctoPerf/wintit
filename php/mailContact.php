<?php
if($_POST){
    	//$message = $_POST['data'];

$message = '<html><body>';
$message .= '<table cellpadding="0" cellspacing="0" style="width: 100%;"><tbody>';
$message .= '<tr><td>Civilite</td><td>'.$_POST['civilite'].'</td></tr>';
$message .= '<tr><td>Nom, prenom</td><td>'.$_POST['name'].'</td></tr>';
$message .= '<tr><td>Fonction</td><td>'.$_POST['ffunction'].'</td></tr>';
$message .= '<tr><td>Societe</td><td>'.$_POST['company'].'</td></tr>';
$message .= '<tr><td>Adresse de courriel</td><td>'.$_POST['email'].'</td></tr>';
$message .= '<tr><td>Numero de telephone</td><td>'.$_POST['phone'].'</td></tr>';
$message .= '<tr><td>Comment avez vous connu notre site ?&nbsp;</td><td>'.$_POST['connaissance'].'</td></tr>';
$message .= '<tr><td>Vos questions et/ou suggestions</td><td>'.$_POST['message'].'</td></tr>';
$message .= '</tbody></table></body></html>';

	$copy = $_POST['copy'];
	//send email
	$to      = 'bettina.gerecht@wintit.com, rene.khlat@wintit.com, bbruet@wintit.com';
	$Expediteur = 'postmaster@wintit.com';
	$subject = "Message d'un visiteur sur le site WINTIT";
	
	$headers = 'From: postmaster@wintit.com' . "\r\n" .
    		'Reply-To: postmaster@wintit.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

   	if(trim($DestinatairesCaches)) $headers .= 'Bcc: '.$DestinatairesCaches."\r\n";
   	if($copy===FALSE) $headers .= 'From: '.$Expediteur."\r\n";

	$headers .= 'MIME-Version: 1.0'."\r\n";
   	$headers .= 'Content-Type: text/html; charset=iso-8859-1'."\r\n";
    	$headers .= 'X-Mailer: PHP/'.phpversion()."\r\n";

	mail($to, $subject, $message, $headers);
}
?>
