<?php
// Vérifiez que les champs soient remplis
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Crée l'e-mail et envoie le message
$to = 'christophe@mydatalabs.com'; // Ajoutez votre adresse email entre les '' remplacez yourname@yourdomain.com - C'est l'endroit où le formulaire enverra un message.
$email_subject = "Formulaire de Contact Web :  $name";
$email_body = "Vous avez reçu un nouveau message de votre formulaire de contact web.\n\n"."Voici les détails:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@christopheducamp.com\n"; // Ceci est l'adresse email à laquelle le message sera genere. Nous recommandons d'utiliser quelque chose comme noreply@votredomaine.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>