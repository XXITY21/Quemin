
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="max-width: 560px; margin: 0 auto;  padding-top: 150px; background: #292826;  font-family: 'Roboto Condensed';  ">
<form action="./registrate.php" style=" padding: 20px 40px; background: #F5F2ED; border-radius: 15px;">
<h2 style=" text-align: center"> Регистрация  </h2>
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Логин</label>
    <input type="text" id="form2Example1" class="form-control" name="login" />

  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Пароль</label>
    <input type="password" id="form2Example2" name="password" class="form-control" />

  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      
    </div>
  </div>

  <!-- Submit button -->
  <button type="sumbit" class="btn btn-primary btn-block mb-4" style="margin-left: 150px; background: #DC9271; --bs-btn-border-color: #DC9271; " >Зарегистрироваться</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Вы зарегистрированы? <a href="./sign-in.php">Войти</a></p>
    </div>
</form>
    
</body>
</html>