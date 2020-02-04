<?php

require_once '../libs/debug.php';

session_start();

// Если кнопка запроса нажата
if( !empty($_POST['sendTracking']) ) {
    // Если значение трек номера заполнено
    if( !empty($_POST['numberTracking'])) {
        $tracking = htmlspecialchars($_POST['numberTracking']);
        $tracking = trim($tracking);
    } else {
        $tracking = null;
    }
}

// Настройка запроса на сервер
$url = curl_init('https://home.courierexe.ru/api/');
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);

// Генерация XML запроса на сервер
$request = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<tracking>
  <extra>290</extra>
  <orderno>$tracking</orderno>
</tracking>
XML;

// Настройка заголовков и отправка сообщения
curl_setopt($url, CURLOPT_HTTPHEADER, 
        array('Content-Type: text/xml; charset=utf-8', 
              'Content-Length: '.strlen($request)));

curl_setopt($url, CURLOPT_POSTFIELDS, $request);

// Получение ответа в виде XML
$response = curl_exec($url);

$xml = simplexml_load_string($response);
if(!empty($xml->order)) {
    $_SESSION['tracking'] = (string)$xml->order['orderno'];
    $_SESSION['datefrom'] = (string)$xml->order->sender->date;
    $_SESSION['townfrom'] = (string)$xml->order->sender->town;
    $_SESSION['dateto'] = (string)$xml->order->receiver->town;
    $_SESSION['townto'] = (string)$xml->order->receiver->town;
    $_SESSION['mass'] = (string)$xml->order->weight;
    $_SESSION['mest'] = (string)$xml->order->quantity;
    $_SESSION['status'] = (string)$xml->order->status;
}
header('Location: ../../index');

// Завершения соединения через CURL
curl_close($url);

