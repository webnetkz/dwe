<?php

    require_once 'app/libs/debug.php';

    session_start();
    
    // Модальное окно данных по трек номеру
    if(!empty($_SESSION['tracking'])) {
        echo '<div class="modal">';
            echo '<img src="public/images/close.svg" alt="close icon" class="closeBtn">';
            echo '<p class="trackNumber">Трек номер: ' . $_SESSION['tracking'] . '</p>';
                echo '<p class="headModalLine">Дата отправки — </p> ';
                echo '<p>' . $_SESSION['datefrom'] . ';</p><br>';

            echo '<p class="headModalLine">Город отправки — </p> ';
            echo '<p>' . $_SESSION['townfrom'] . ';</p><br>';

            echo '<p class="headModalLine">Дата доставки — </p> ';
            echo '<p>' . $_SESSION['dateto'] . ';</p><br>';

            echo '<p class="headModalLine">Город доставки — </p> ';
            echo '<p>' . $_SESSION['townto'] . ';</p><br>';

            echo '<p class="headModalLine">Общий вес — </p> ';
            echo '<p>' . $_SESSION['mass'] . ' кг.;</p><br>';

            echo '<p class="headModalLine">Количество мест — </p> ';
            echo '<p>' . $_SESSION['mest'] . ' мест-a;</p><br>';

            echo '<p class="headModalLine">Статус — </p> ';
            echo '<p>' . $_SESSION['status'] . ';</p><br>';
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
    <meta name="description" content="">
    <meta name="keywords" content="">
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
        <img src="public/images/logo.png" alt="logotype dwe dwexpress" class="logo">
        <div class="headerTexts">
            <p class="headerText">ВЫСОКАЯ СКОРОСТЬ ДОСТАВКИ</p>
            <p class="headerText">ВЫГОДНЫЕ УСЛОВИЯ</p>
            <p class="headerText">БЫСТРЫЙ РАСЧЕТ</p>
        </div>
    </header>
    <menu>
        
    </menu>
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
                <input type="text" class="inp_track inp_btn_track" name="numberTracking" placeholder="Трек номер">
                <input type="submit" name="sendTracking" class="btn_track inp_btn_track" value="Узнать местонахождение">
            </form>
        </div>
    </section>

    <script src="public/scripts/libs/trackingModal.js"></script>
</body>
</html>