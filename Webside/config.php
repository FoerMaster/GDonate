<?php
$config['db'][0] =
[
    'user' => '',
    'pass' => '',
    'host' => '',
    'dbname' => '',
];
$config['db'][1] =
    [
        'user' => '',
        'pass' => '',
        'host' => '',
        'dbname' => '',
        'table_bans' => ''
    ];
/**
 * @var $config['domain'] domain for short link service
 */
$config['domain']['name'] = "payment.example.com"; // URL Без HTTPS или HTTP
$config['domain']['http'] = "http://payment.example.com/";// URL Тут с HTTP
$config['domain']['https'] = "https://payment.example.com/";// URL Тут с HTTPS
$config['domain']['surl'] = "https://payment.example.com/"; //путь до обработчика сейчас это index.php


/**
 * @var $config['product'] Product id from degiseller
 */
$config['digiseller']['product']['id'] = ; //Код товара
$config['digiseller']['id_seller'] = ; // Ид продавца
$config['digiseller']['password'] = ''; // Пароль от Digiseller



//GAME CONFIG
$config['unban']['allow'] = true;
$config['unban']['price'] = 150; //указывать int число

$config['token'] = '123123'; 
$config['currency'] = "рубль(-ей)";
