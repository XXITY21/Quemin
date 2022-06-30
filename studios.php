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
<section class="studios">
<h2>Наши студии</h2>

<div class="list_studio_item">
<div class="studio_1"> 
    <img src="./image/Studio.png" alt="Студия 1" width="650" height="750">
</div>
<div class="studio_description_wrapper">
<p class="description_studio_head">Студия 1</p>
<p class="studio_description">Темно-зеленый зал 450 м2. Третий этаж. Отдельно стоящее здание. Отдельный вход. Парковочное место. Возможность въезда автомобилей и больших декораций в зал. 5 гардеробных, 5 ванных комнат, душевая кабина, кухня, вентиляция, кондиционирование воздуха.<br>
    В зале подвешено 60 световых приборов, управляемых с пультов дистанционного управления.<br>
    
    В стоимость аренды входит следующее оборудование:
    46 Светодиодных прожекторов LED PAR для различных цветовых сочетаний освещения зала и стен. 
    Звук SL audio (1000 Вт.)
    Площадь составляет 450 кв.м. Высота потолков до балок - 7 м. до конька крыши - 9,5 м. Ширина циклорамы - 16 м. Глубина - 18 м. Высота - 7,5 м. Электрическая мощность 200 кВ.
</p>
<a class="Book_intro list-services__book book_studios" href="index.php#book">Забронировать</a>
</div>
</div>
<div class="list_studio_item">
    <div class="studio_1"> 
        <img src="./image/Studio.png" alt="Студия 1" width="650" height="750">
    </div>
    <div class="studio_description_wrapper">
    <p class="description_studio_head">Студия 2</p>
    <p class="studio_description">Темно-зеленый зал 450 м2. Третий этаж. Отдельно стоящее здание. Отдельный вход. Парковочное место. Возможность въезда автомобилей и больших декораций в зал. 5 гардеробных, 5 ванных комнат, душевая кабина, кухня, вентиляция, кондиционирование воздуха.<br>
        В зале подвешено 60 световых приборов, управляемых с пультов дистанционного управления.<br>
        
        В стоимость аренды входит следующее оборудование:
        46 Светодиодных прожекторов LED PAR для различных цветовых сочетаний освещения зала и стен. 
        Звук SL audio (1000 Вт.)
        Площадь составляет 450 кв.м. Высота потолков до балок - 7 м. до конька крыши - 9,5 м. Ширина циклорамы - 16 м. Глубина - 18 м. Высота - 7,5 м. Электрическая мощность 200 кВ.
    </p>
    <a class="Book_intro list-services__book book_studios" href="index.php#book">Забронировать</a>
    </div>
    </div>
    <div class="list_studio_item">
        <div class="studio_1"> 
            <img src="./image/Studio.png" alt="Студия 1" width="650" height="750">
        </div>
        <div class="studio_description_wrapper">
        <p class="description_studio_head">Студия 3</p>
        <p class="studio_description">Темно-зеленый зал 450 м2. Третий этаж. Отдельно стоящее здание. Отдельный вход. Парковочное место. Возможность въезда автомобилей и больших декораций в зал. 5 гардеробных, 5 ванных комнат, душевая кабина, кухня, вентиляция, кондиционирование воздуха.<br>
            В зале подвешено 60 световых приборов, управляемых с пультов дистанционного управления.<br>
            
            В стоимость аренды входит следующее оборудование:
            46 Светодиодных прожекторов LED PAR для различных цветовых сочетаний освещения зала и стен. 
            Звук SL audio (1000 Вт.)
            Площадь составляет 450 кв.м. Высота потолков до балок - 7 м. до конька крыши - 9,5 м. Ширина циклорамы - 16 м. Глубина - 18 м. Высота - 7,5 м. Электрическая мощность 200 кВ.
        </p>
        <a class="Book_intro list-services__book book_studios" href="index.php#book">Забронировать</a>
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