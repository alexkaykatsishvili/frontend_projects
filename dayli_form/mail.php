<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>

<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
	if(!empty($_POST['first_name']) and !empty($_POST['last_name']) 
and !empty($_POST['email']) and !empty($_POST['password'])){
   $first_name = trim(strip_tags($_POST['name']));
	$last_name = trim(strip_tags($_POST['phone']));
	$email = trim(strip_tags($_POST['mail']));
	$password = trim(strip_tags($_POST['message']));

	mail('oleksandr_kaykatsishvili@mail.ua', 'Письмо с адрес_вашего_сайта', 
'Вам написал: '.$first_name.'<br />Его фамилия: '.$last_name.'<br />Его почта: '.$email.'<br />
Его пароль: '.$password,"Content-type:text/html;charset=windows-1251");

	echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
} 
else {
   echo "Для отправки сообщения заполните все поля! $back";
   exit;
}
?>

</body>
</html>