<?php

require_once __DIR__ . '/helpers.php';

$categories = [];

$items = [];

$page_content = include_template('inc/main.php' , ['$categories']);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'YetiCave - Главная'
]);

print($layout_content);

