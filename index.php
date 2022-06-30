
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
        <section class="intro">
            <div class="welcome">
                <img src="./image/Welcome.png" alt="Welcome">
            </div>
            <h1>Мы сохраним ваши <br>
                лучшие моменты!</h1>
            <a class="Book_intro" href="#book">
                Забронировать
            </a>
        </section>
        <section class="about">
            <h2>
                О нас
            </h2>
            <div class="card-container">
                <div>
                    <p>Это не просто место, где фотографы<br> могут создавать действительно<br> качественные<br>
                        и красивые снимки, воплощая в жизнь<br> самые смелые и амбициозные<br> проекты.</p>
                    <img src="./image/about_card_1.png" alt="About1">
                </div>
                <div>
                    <p>Прежде всего, мы создали современную<br> территорию для творчества, в рамках<br> которой люди,
                        объединенные общими<br> интересами, образом жизни и<br> профессией, могут создавать что-то<br>
                        новое.</p>
                    <img src="./image/about_card_2.png" alt="About2">
                </div>
                <div>
                    <p>У вас также есть возможность<br> воспользоваться<br>
                        услугами нашего помощника, который<br> поможет вам. Его присутствие на<br> площадке гарантирует
                        бесперебойную<br> работу оборудования и комфорт.</p>
                    <img src="./image/about_card_3.png" alt="About3">
                </div>
            </div>
        </section>
        
        <section class="services">
        <h2>Услуги</h2>
        
        <div class="tabs">
          <div class="tab-2">
            <label for="tab2-1">Аренда студии</label>
            <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
            <div>
                <div class="list-services">
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">В будни</h3>
                            <p class="service-item__description">аренда студии <br> 1 час</p>
                            <p class="service-item__price"><s class="price_decoration">1500₽</s> 1300 ₽</p>
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">В выходные</h3>
                            <p class="service-item__description">аренда студии <br> 1 час</p>
                            <p class="service-item__price"><s class="price_decoration">1700₽</s> 1500 ₽</p>
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                </div>
                <div class="list-services">
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">В будни</h3>
                            <p class="service-item__description">аренда студии <br> 3 часа</p>
                            <p class="service-item__price"><s class="price_decoration">4500₽</s> 4000 ₽</p>
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">В выходные</h3>
                            <p class="service-item__description">аренда студии <br> 3 часа</p>
                            <p class="service-item__price"><s class="price_decoration">5100₽</s> 4500 ₽</p>
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-2">
            <label for="tab2-2">Подарочные сертификаты</label>
            <input id="tab2-2" name="tabs-two" type="radio">
            <div>
                <div class="list-services">
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">Сертификат</h3>
                            <p class="service-item__description">на аренду студии <br> 1 час</p>
                            <p class="service-item__price"> 1300 ₽</p>
    
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-item__wrapper">
                            <h3 class="service-item__title">Сертификат</h3>
                            <p class="service-item__description">на аренду студии <br> 3 часа</p>
                            <p class="service-item__price"> 3900 ₽</p>
                            <a class="Book_intro list-services__book" href="#book">Забронировать</a>
                        </div>
                    </div>
                </div>
               
            </div>
          </div>
        </div>
        </section>
        
        
        <section class="gallery">
            <h2>Галерея</h2>
            <p class="gallery_description">Место встречи для тех, кто хочет сохранить воспоминания о семейном празднике или
                первой встрече, а также для тех, для кого фотография - любимая работа в качестве опытных моделей или
                новичков на пути к созданию личного портфолио.</p>
            <div class="photo_gallery one">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
            </div>
            <div class="photo_gallery">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
                <img src="./image/Gallery.png" alt="Gallery" width="340" height="500">
            </div>
        </section>
        <section class="reviews">
            <h2>Отзывы</h2>
            <div class="list_reviews">
                    <div class="reviews_item">
                    <div class="reviews_item__wrapper">
                        <img src="./image/five_stars.svg" alt="Оценка">
                        <p class="reviews_item__title">Профессиональная работа,
                            высокое качество услуг. Потрясающая командная работа!</p>
                        <p class="reviews_item__description">С самого начала и до конца всем
                            занимается профессиональная команда. Приятно
                            работать с командой. Спасибо!</p>
                        <p class="reviews_item__name">Мария Липова</p>
                    </div>
                    </div>
                    <div class="reviews_item">
                        <div class="reviews_item__wrapper">
                            <img src="./image/five_stars.svg" alt="Оценка">
                            <p class="reviews_item__title">Профессиональная работа,
                                высокое качество услуг. Потрясающая командная работа!</p>
                            <p class="reviews_item__description">С самого начала и до конца всем
                                занимается профессиональная команда. Приятно
                                работать с командой. Спасибо!</p>
                            <p class="reviews_item__name">Мария Липова</p>
                        </div>
                    </div>
                        <div class="reviews_item">
                            <div class="reviews_item__wrapper">
                                <img src="./image/five_stars.svg" alt="Оценка">
                                <p class="reviews_item__title">Профессиональная работа,
                                    высокое качество услуг. Потрясающая командная работа!</p>
                                <p class="reviews_item__description">С самого начала и до конца всем
                                    занимается профессиональная команда. Приятно
                                    работать с командой. Спасибо!</p>
                                <p class="reviews_item__name">Мария Липова</p>
                            </div>  
                        </div>                  
            </div>               
        </section>
        <section class="contacts">
        <h2>Контакты</h2>
        <div>
            <div class="contacts_time_address">
                <p class="contacts_time">09:00 - 21:00</p>
                <p class="contacts_address">Москва, Нежинская улица, 7, этаж 3</p>
            </div>
            <div class="contact_items">
                <img src="./image/Whatsapp.svg" alt="Whatsapp">
                <img src="./image/E-mail.svg" alt="E-mail">
                <img src="./image/telegram.svg" alt="Telegram">
            </div>
            
        </div>
        </section>

        <section class="form">
            <h2><a name="book"></a>Мы ждем вас в гости!</h2>
            <div class="photo_studio__1">
                <img src="./image/form_studio.png" alt="" width="700" height="600">
            </div>  

<?php
if (isset($_POST['name']) && isset($_POST['date'])&& isset($_POST['number']) && isset($_POST['email'])) {
// Переменные с формы
$name = $_POST['name'];
$text = $_POST['date'];
$textnumber =
$_POST['number'];
$textemail = $_POST['email'];
// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = "db_quemin"; // Имя БД
$db_table = "clients"; // Имя Таблицы БД
try {
// Подключение к базе данных
$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
// Устанавливаем корректную кодировку
$db->exec("set names utf8");
// Собираем данные для запроса
$data = array( 'name' => $name, 'date' => $text,'number' => $textnumber,'email' => $textemail );
// Подготавливаем SQL-запрос
$query = $db->prepare("INSERT INTO $db_table (name, date,number,email) values (:name, :date, :number,:email)");
// Выполняем запрос с данными
$query->execute($data);
// Запишим в переменую, что запрос отрабтал
$result = true;
} catch (PDOException $e) {
// Если есть ошибка соединения или выполнения запроса, выводим её
print "Ошибка!: " . $e->getMessage() . "<br/>";
}

if ($result) {
echo "Заявка оформлена";
}
}
?>  
    <form class="mainscreen" action="" method=POST>
                <p>Ф.И.О.</p>
                <input type="name" class="inputbox" name="name" placeholder="Иванов Иван Иванович" required />
                <p>Номер телефона</p>
                <input type="text" class="inputbox"  name="number" placeholder="+79101710000"  required />
                <p>Электронная почта</p>
                <input type="text" class="inputbox" name="email" placeholder="ivanov@mpt.ru"  required />
                <p>Выберите дату</p>
                <input type="date" class="inputbox" name="date"  required />
                <p>Студия</p>
                <select class="inputbox" name="card_type" required>
                  <option value="">Выберите студию</option>
                  <option value="Studio1">Студия 1</option>
                  <option value="Studio2">Студия 2</option>
                  <option value="Studio3">Студия 3</option>
                </select>
                
                <p>Тип съемки</p>
                <select class="inputbox" name="card_type"  required>
                    <option value="">Выберите тип съемки</option>
                    <option value="Photo_type1">Объектная съемка</option>
                    <option value="Photo_type2">Семейная съемка</option>
                    <option value="Photo_type3">Рекламная съемка</option>
                  </select>
               
                <button type="submit" class="button_submit">Забронировать</button>
              </form>
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