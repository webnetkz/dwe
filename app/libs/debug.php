<?php

    // Отображение ошибок при отладке
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // Отобразить все данные   
    function debug($element) {
        echo '<pre>';
        var_dump($element);
        die('<hr>');
    }