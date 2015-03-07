<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
    empty($_POST['phone'])      ||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];

$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'it.fedia@gmail.com'; // put your email
$email_subject = "Контактная форма:  $name";
$email_body = "Вы получили новое сообщение. \n\n".
				  "Побдробнее:\n \nИмя: $name \n".
				  "\nТелефон: $phone \n".
				  "Email: $email_address\n Сообщение:\n $message";
$headers = "Для: it.fedia@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>