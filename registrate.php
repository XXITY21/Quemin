<?php
session_start();
// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = "db_quemin"; // Имя БД
$db_table = "clients"; // Имя Таблицы БД
try {

$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
$db->exec("set names utf8");

$data = array($_GET['login']);
$query = $db->prepare("SELECT * FROM `users` WHERE `user_login`=?");
$query->execute($data);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (!count($res)){
    $query = $db->prepare("INSERT INTO `users`( `user_login`, `user_password`, `role`) VALUES (?,?,0)");
    $query->execute(array($_GET['login'], $_GET['password']));

    header('Location: ./index.php');

} else echo 'Логин занят';

$result = true;
} catch (PDOException $e) {
// Если есть ошибка соединения или выполнения запроса, выводим её
print "Ошибка!: " . $e->getMessage() . "<br/>";
}


?>