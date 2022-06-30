<?php
    session_start();

    $user = null;

    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }

    
?>

<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QUEMIN</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav class="header_menu">
            <ul class="menu">
            <a class="logo" href="index.php"><img src="./image/quemin.svg"></a>
               <li><a href="photographers.php">Фотографы</a></li>
                <li><a href="studios.php">Студии</a></li>
                <li><a href="works.php">Работы</a></li>

                <?php if (!$user) :?>
                    <li><a href="./sign-in.php">Вход</a></li>
                <?php else :?>
                    <li><a href="./logout.php">Выйти</a></li>
                <?php endif;?>

                <?php if (isset($user['role'])) :?>
                    <?php if ($user['role'] == 1) :?>
                    <li><a href="./admin.php">Админ</a></li>
                    <?php endif;?>
                <?php endif;?>
   
            </ul>
        </nav>
        <div class="line__top"></div>
    </header>
<main>
<section class="works">
<h2>Наши работы</h2>
<div class="works_list">
    <div class="work_list_item">
        <img src="./image/reklam_photo.png" alt="Рекламная съемка">
        <h4>Рекламная съемка</h4>
        <p class="reklam_description">Это съемка, связанная с демонстрацией одежды, аксессуаров и других элементов моды.</p>
        <div class="button_works"> <a href="category_reklam.php"><img src="./image/angle-circle-right_1.png" alt=""></a></div>
    </div>
    <div class="work_list_item">
        <img src="./image/family_photo.png" alt="Семейная съемка">
        <h4>Семейная съемка</h4>
        <p class="reklam_description">Идея семейной фотосессии заключается в удачном выборе фотографа, локации, образов и аксессуаров.</p>
        <div class="button_works"><img src="./image/angle-circle-right_1.png" alt=""></div>
    </div>
    <div class="work_list_item">
        <img src="./image/object_photo.png" alt="Объектная съемка">
        <h4>Объектная съемка</h4>
        <p class="reklam_description">Жанр фотоискусства, наглядно демонстрирующий внешний вид товаров и товарных групп. Подойдет для рекламы.</p>
        <div class="button_works"><img src="./image/angle-circle-right_1.png" alt=""></div>
    </div>
</div>
<div class="works_list">
    <div class="work_list_item">
        <img src="./image/reklam_photo.png" alt="Рекламная съемка">
        <h4>Рекламная съемка</h4>
        <p class="reklam_description">Это съемка, связанная с демонстрацией одежды, аксессуаров и других элементов моды.</p>
        <div class="button_works"> <a href="category_reklam.php"><img src="./image/angle-circle-right_1.png" alt=""></a></div>
    </div>
    <div class="work_list_item">
        <img src="./image/family_photo.png" alt="Семейная съемка">
        <h4>Семейная съемка</h4>
        <p class="reklam_description">Идея семейной фотосессии заключается в удачном выборе фотографа, локации, образов и аксессуаров.</p>
        <div class="button_works"><img src="./image/angle-circle-right_1.png" alt=""></div>
    </div>
    <div class="work_list_item">
        <img src="./image/object_photo.png" alt="Объектная съемка">
        <h4>Объектная съемка</h4>
        <p class="reklam_description">Жанр фотоискусства, наглядно демонстрирующий внешний вид товаров и товарных групп. Подойдет для рекламы.</p>
        <div class="button_works"><img src="./image/angle-circle-right_1.png" alt=""></div>
    </div>

</div>
</section>
</main>
<footer class="footer">
        
    <div class="line__top footer_line"></div>
    <p class="ddd">Quemin</p>
    <p class="welcome2">Добро пожаловать в студию Quemin. Мы считаем, что если момент запечатлен на камеру, он будет иметь большое значение</p>

    <div class="footer-right">

        <a href="#"><img src="./image/telegram_2.svg" alt="" width="40" height="40"></a>
        <a href="#"><img src="./image/pinterest_1.svg" alt="" width="40" height="40"></a>
        <a href="#"><img src="./image/whatsapp_2.svg" alt="" width="40" height="40"></a>
        <a href="#"><img src="./image/twitter_1.svg" alt="" width="40" height="40"></a>

    </div>
    <div class="footer-left">
            <p class="footer-links">
                <a class="link-1" href="index.php">Главная</a>
            
                <a href="photographers.php">Фотографы</a>

                <a href="studios.php">Студии</a>

                <a href="works.php">Работы</a>
            </p>
        
        
        <p class="end_footer">Quemin Studio &copy; 2022</p>
    </div>

</footer>
</body>
</html>