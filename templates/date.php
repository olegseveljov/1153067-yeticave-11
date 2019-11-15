<?php

date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, 'ru_RU');

function get_dt_range($sendTime) {
    $currentDate = date('Y.m.d');

    $sendTime = strtotime($sendTime);
    $currentTime = time();

    $diff = $sendTime - $currentTime;

    $hours = floor($diff / 3600);
    $minutes = floor(($diff - $hours * 3600) / 60);

    return [
        str_pad($hours, 2, '0', str_pad_left),
        $minutes
    ];

}

//et_dt_range('expire_date'); // вызов функции

//<?= et_dt_range($endTime); ?>
