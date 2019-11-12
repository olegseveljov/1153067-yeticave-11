<?php

$categories = [];

$items = [];

$page_content = include_template('inc/main.php' , ['$categories']);

$layout_content = include_templat('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'Title' => 'YetiCave - Главная'
]);

print($layout_content);

