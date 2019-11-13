<?php

require_once __DIR__ . '/helpers.php';

function esc($str){
    $text = htmlspecialchars($str);
    return $text;
}

$page_content = include_template('main.php' , ['categories' => $categories,]);

$is_auth = rand(0, 1);

$user_name = 'Oleg';

$categories = [
    "Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"
];

$items = [
    [
        'image' => 'img/lot-1.jpg',
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
    ],
    [
        'image' => 'img/lot-2.jpg',
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
    ],
    [
        'image' => 'img/lot-3.jpg',
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
    ],
    [
        'image' => 'img/lot-4.jpg',
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
    ],
    [
        'image' => 'img/lot-5.jpg',
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
    ],
    [
        'image' => 'img/lot-6.jpg',
        'title' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
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

print($layout_content);

