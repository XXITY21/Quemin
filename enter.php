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

$data = array($_GET['login'], $_GET['password']);
$query = $db->prepare("SELECT * FROM `users` WHERE `user_login`=? AND `user_password`=?");
$query->execute($data);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res)){
    $_SESSION['user'] = $res[0];

    header('Location: ./index.php');

} else echo 'Аккаунт не найден';

$result = true;
} catch (PDOException $e) {
// Если есть ошибка соединения или выполнения запроса, выводим её
print "Ошибка!: " . $e->getMessage() . "<br/>";
}

?>