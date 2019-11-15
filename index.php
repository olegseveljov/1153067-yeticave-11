<?php

date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, 'ru_RU');

$categories = [
    'Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'
];

$is_auth = rand(0, 1);

$user_name = 'Oleg';

$items = [
    [
        'image' => 'img/lot-1.jpg',
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
        'expire_date' => '2019-11-16',
    ],
    [
        'image' => 'img/lot-2.jpg',
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'expire_date' => '2019-12-12',

    ],
    [
        'image' => 'img/lot-3.jpg',
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'expire_date' => '2019-12-13',
    ],
    [
        'image' => 'img/lot-4.jpg',
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'expire_date' => '2019-12-14',
    ],
    [
        'image' => 'img/lot-5.jpg',
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'expire_date' => '2019-12-15',
    ],
    [
        'image' => 'img/lot-6.jpg',
        'title' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'expire_date' => '2019-12-16',
    ],
];

$content = include_template('main.php' , [
    'categories' => $categories,
    'items' => $items,
]);

$layout_content = include_template('layout.php' , [
    'categories' => $categories,
    'title' => 'YetiCave - Главная',
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'content' => $content
]);

function get_dt_range($endTime) { //Название функции и атрибут придумываем сами, чтоб подходил по логическому смыслу или указано в задании
    $endTime = strtotime($endTime); // Форматируем дату в timestamp функцией strtotime
    $currentTime = strtotime('now'); // Получем текущий timestams на даннай момент 'now' с  функцией strtotime
    $diff = $endTime - $currentTime; // Получаем временной остаток будущее минус настоящее и записываем его в $diff автоматом
    $hours = floor($diff / 3600); // Извлекаем часы делением на секунда и округляем при помощи 'floor'
    $minutes = floor(($diff - $hours * 3600) / 60); // Извлекаем минуты делением на секунда и округляем при помощи 'floor'

    return implode(':' , [                          // Возвращаем отформатированные часа и минуты в нужном формате
        str_pad($hours, 2, '0', STR_PAD_LEFT),
        $minutes
    ]);
}

require_once __DIR__ . '/helpers.php';

function esc($str){
    return htmlspecialchars($str);
};

print($layout_content);
