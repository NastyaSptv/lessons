<?php

$json = file_get_contents('../goods.json');
$json = json_decode($json, true);

$message = '';
$message .= '<h1>Заказ в магазине</h1>';
$message .= '<p>Телефон: '.$_POST['ephone'].'</p>';
$message .= '<p>Почта: '.$_POST['email'].'</p>';
$message .= '<p>Клиент: '.$_POST['ename'].'</p>';

$cart = $_POST['cart'];
$sum = 0;
foreach ($cart as $id=>$count) {
$message .=$json[$id]['name'].' —- ';
$message .=$count.' —- ';
$message .=$count*$json[$id]['cost'];
$message .='<br>';
$sum = $sum +$count*$json[$id]['cost'];
}
$message .='Всего: '.$sum;

//print_r($message);

var_dump($message);