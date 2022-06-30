
<?php
    session_start();

    $user = null;

    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }

    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = "db_quemin"; // Имя БД
    $db_table = "clients"; // Имя Таблицы БД


    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $db->exec("set names utf8");
    $query = $db->prepare("SELECT * FROM `clients`");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if (isset($user['role'])){
        if ($user['role'] == 0){
            header('Location: ./index.php');
        }
    }
    
  

    $attributes = $res;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="max-width: 560px; margin: 0 auto;  padding-top: 100px; background: #292826;  font-family: 'Roboto Condensed'; ">
<form enctype="multipart/form-data" method="post" action="./create_photo.php" style=" padding: 20px 40px; background:  #F5F2ED; border-radius: 15px; margin-bottom: 60px;">
<h2 style=" text-align: center"> Панель администратора  </h2>
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Загрузите фото</label>
    <input type="file" id="form2Example1" class="form-control" name="file" />
  </div>
  <button type="sumbit" class="btn btn-primary btn-block mb-4" style="margin-left: 200px; background: #DC9271; --bs-btn-border-color: #DC9271; " >Загрузить</button>
</form>


<h2 style="color: #F5F2ED !important">Заказы</h2>
<table class="table" style="color: #F5F2ED !important">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($res as $item) :?>
        <tr>
      <td><?= $item['ID_Client'] ;?></td>
      <td><?= $item['Name'] ;?></td>
      <td><?= $item['Date'] ;?></td>
      <td><?= $item['Number'] ;?></td>
      <td><?= $item['Email'] ;?></td>
    </tr>
   
    <?php endforeach ;?>
   
    
  </tbody>
</table>
    
</body>
</html>