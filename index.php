<?php

require_once __DIR__ . '/helpers.php';
require_once '/helpers.php';
function ($price){
    return $price;
}

$layout_content = include_template('main.php' , [
    'is_auth' => $is_auth,
    'categories' => $categories,
    'items' => $items
]);


$content = include_template('main.php' , ['content' => 'title']);

$layout_content = include_template('main/layout.php' , [
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'YetiCave - Главная'
]);

print($layout_content);

