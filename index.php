<?php

    require_once 'app/libs/debug.php';

    session_start();
    
    // Модальное окно данных по трек номеру
    if(!empty($_SESSION['tracking'])) {
        echo '<div class="modal">';
            echo '<img src="public/images/close.svg" alt="close icon" class="closeBtn" onclick="closeModal();">';
            echo '<p class="trackNumber">Трек номер: ' . $_SESSION['tracking'] . '</p>';
                echo '<p class="headModalLine">Дата отправки — </p> ';
                echo '<p>' . $_SESSION['datefrom'] . ';</p><hr>';

            echo '<p class="headModalLine">Город отправки — </p> ';
            echo '<p>' . $_SESSION['townfrom'] . ';</p><hr>';

            echo '<p class="headModalLine">Дата доставки — </p> ';
            echo '<p>' . $_SESSION['dateto'] . ';</p><hr>';

            echo '<p class="headModalLine">Город доставки — </p> ';
            echo '<p>' . $_SESSION['townto'] . ';</p><hr>';

            echo '<p class="headModalLine">Общий вес — </p> ';
            echo '<p>' . $_SESSION['mass'] . ' кг.;</p><hr>';

            echo '<p class="headModalLine">Количество мест — </p> ';
            echo '<p>' . $_SESSION['mest'] . ' мест-a;</p><hr>';

            echo '<p class="headModalLine">Статус — </p> ';
            echo '<p>' . $_SESSION['status'] . ';</p><hr>';
        echo '</div>';
        // Удаляем временные данные трек номера
        unset($_SESSION['tracking']);
        unset($_SESSION['townfrom']);
        unset($_SESSION['datefrom']);
        unset($_SESSION['dateto']);
        unset($_SESSION['townto']);
        unset($_SESSION['mass']);
        unset($_SESSION['mest']);
        unset($_SESSION['status']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(88, 139, 221)">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="DWE">
    <meta name="keywords" content="DWE">
    <meta name="author" content="DWE">

    <!-- CODELAB: Add iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="newProduct">
    <link rel="apple-touch-icon" href="public/images/logo.png">
    <link rel="stylesheet" href="public/styles/allStyle.css">
    <link rel="stylesheet" href="public/styles/desctop.css">
    <link rel="stylesheet" href="public/styles/mobile.css">
    <link rel="stylesheet" href="public/styles/modalStyle.css">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="public/images/miniLogo.png" type="image/png">

    <title>DWE</title>

</head>
<body>
    <header>
        <a href="index">
            <img src="public/images/logo.png" alt="logotype dwe dwexpress" class="logo">
        </a>
        <div class="headerTexts">
            <p class="headerText">ВЫСОКАЯ СКОРОСТЬ ДОСТАВКИ</p>
            <p class="headerText">ВЫГОДНЫЕ УСЛОВИЯ</p>
            <p class="headerText">БЫСТРЫЙ РАСЧЕТ</p>
        </div>
    </header>
    <menu>
        
    </menu>
<!--########################## INDEX ##############################-->
<!--########################## INDEX ##############################-->
<!--########################## INDEX ##############################-->

    <section id="index">
        <h2>ЭКОНОМИЧНАЯ И НАДЕЖНАЯ ДОСТАВКА ИЗ КИТАЯ</h2>
        <div class="indexContent">
            <h3>В РОССИЮ, КАЗАХСТАН, СТРАНЫ ЕС, АМЕРИКА И КАНАДА, УЗБЕКИСТАН И УКРАИНА</h3>
        </div>
        <div class="indexContentTwo">
            <h3>ЛЮБОЙ ВЕС, ГАРАНТИЯ, В СРОК!</h3>
        </div>
        <div class="tracking">
            <form action="app/api/tracking" method="POST">
                <label class="labelTrack">
                    Отследить посылку
                    <input type="text" class="inp_btn_track" name="numberTracking" placeholder="Трек номер">
                </label>
                <input type="submit" name="sendTracking" class="btn_track inp_btn_track" value="Узнать местонахождение">
            </form>
        </div>
        <a href="#calc" class="forCalc">
            <img src="public/images/calc/calculator.svg" alt="calculator dwe" class="imgCalc">
            Калькулятор
        </a>
    </section>

<!--########################## FOR YOU ##############################-->
<!--########################## FOR YOU ##############################-->
<!--########################## FOR YOU ##############################-->

    <section id="forYou">
        <h2>СПЕЦИАЛЬНО ДЛЯ ВАС</h2>
        <div class="forYou">
            <div class="forYouItem">
                <img src="public/images/forYou/pig.svg" alt="pig dwe" class="forYouImg">
                <p class="forYouText">Выгодные тарифы – продуманные, рассчитанные специально для интернет-посылок</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/warehouse.svg" alt="warehouse dwe" class="forYouImg">
                <p class="forYouText">4 склада в крупных городах Китая – Пекин, Гуанджоу, Иу, Фуцзянь</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/terms.svg" alt="terms dwe" class="forYouImg">
                <p class="forYouText">Максимальная точность соблюдения нормативного срока доставки груза</p>
            </div>
            
            <div class="forYouItem">
                <img src="public/images/forYou/box.svg" alt="box dwe" class="forYouImg">
                <p class="forYouText">ПВЗ в более чем 100 городах России и других странах</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/time.svg" alt="time dwe" class="forYouImg">
                <p class="forYouText">Самая быстрая обратная связь – с Вами будут работать только самые грамотные и профессиональные менеджеры</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/maps-and-location.svg" alt="maps-and-location dwe" class="forYouImg">
                <p class="forYouText">Удобное время и место получения посылок</p>
            </div>

            <div class="forYouItem">
                <img src="public/images/forYou/map.svg" alt="map dwe" class="forYouImg">
                <p class="forYouText">Более чем 1800 комфортных зон для выдачи посылок</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/shield.svg" alt="shield dwe" class="forYouImg">
                <p class="forYouText">Гарантия сохранности посылок - 100% страховка и ответственность за груз</p>
            </div>
            <div class="forYouItem">
                <img src="public/images/forYou/shipment.svg" alt="shipment dwe" class="forYouImg">
                <p class="forYouText">Возможность контролировать местонахождение своих посылок</p>
            </div>
        </div>
    </section>

<!--########################## CALCULATOR ##############################-->
<!--########################## CALCULATOR ##############################-->
<!--########################## CALCULATOR ##############################-->

    <div class="lineCalc"></div>
        <section id="calc">
            <div class="calc">
                <form action="" method="POST">
                    <label for="townFrom">Город отправления</label>
                    <input type="text" id="townFrom" class="calcInp">

                    <label for="townTo">Город прибытия</label>
                    <input type="text" id="townTo" class="calcInp">

                    <label for="mass">Вес посылки кг.</label>
                    <input type="text" id="mass" class="calcInp">

                    <select class="serviceCalc">
                        <option value="1">Не срочно</option>
                        <option value="2">Экспресс</option>
                        <option value="3">Срочно</option>
                        <option value="4">Сверхсрочно</option>
                    </select>

                    <input type="submit" class="calcInp" name="sendCalc" value="Расчитать">
                </form>
            </div>
        </section>
    <div class="lineCalc"></div>

    <script src="public/scripts/libs/trackingModal.js"></script>
</body>
</html>