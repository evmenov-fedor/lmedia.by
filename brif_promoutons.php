<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
    empty($_POST['phone'])      ||
   empty($_POST['email']) 		||
   empty($_POST['company_name']) 		||
//   empty($_POST['context']) 		||
//   empty($_POST['smm']) 		||
//   empty($_POST['seo']) 		||
   empty($_POST['thing_promoution']) 		||
   empty($_POST['desire']) 		||
   empty($_POST['select_price'])	||
   empty($_POST['know'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }



$check = '';
if (!empty($_POST["check"]) && is_array($_POST["check"]))
{
    $check = implode(" ", $_POST["check"]);
}
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$company_name = $_POST['company_name'];
$promoutions = $_POST['thing_promoution'];
$desire = $_POST['desire'];
$select_price = $_POST['select_price'];
$know = $_POST['know'];


//$context
	
// create email body and send it	
$to = 'it.fedia@gmail.com'; // put your email
$email_subject = "Контактная форма:  $name";
$email_body = "Вы получили новое сообщение. \n\n".
				  "Побдробнее:\n \nИмя: $name \n".
				  "\nТелефон: $phone \n".
				  "Email: $email_address\n Название компании\n $company_name".
                  "Вид продвижения: $check".
                  "Товар, услуга для продвижения: $promoutions".
                  "Пожелания: $desire".
                  "Ориентировочный бюджет: $select_price".
                  "Откуда узнали про нас: $know"  ;
$headers = "Для: it.fedia@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>