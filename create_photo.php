<?php
    function upload_file($file, $folder){
        $name = (string)uniqid() . $file['name'];
        var_dump($name);
        copy($file['tmp_name'], "./$folder/$name");
        return $name;
    }


    $name = upload_file($_FILES['file'] ,'image');
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = "db_quemin"; // Имя БД
    $db_table = "clients"; // Имя Таблицы БД


    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $db->exec("set names utf8");
    $query = $db->prepare("INSERT INTO `portfolio_category`( `image`) VALUES (?)");
    $query->execute(array($name));
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    echo 1;

    header('Location: ./admin.php');
