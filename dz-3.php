<?php

error_reporting(E_WARNING | E_NOTICE | E_ERROR | E_PARSE);
ini_set('display_errors', 1);

echo '<h2>Домашнее задание №3:</h2>';

$random = rand(0, time()); // Создал переменную генерирующую Unix-метки

// Занёс Unix метки в масив $date
$date = [
    $random,
    $random,
    $random,
    $random,
    $random
];

// Вычислил наименьший день в массиве
$min_day = min(date('l', $date[0]),
         date('l', $date[1]),
         date('l', $date[2]),
         date('l', $date[3]),
         date('l', $date[4])
);
echo "Наименьший день в массиве: " . $min_day.'<br/>';

// Вычислил наибольший месяц в массиве
$max_month = max(date('F', $date[0]),
         date('F', $date[1]),
         date('F', $date[2]),
         date('F', $date[3]),
         date('F', $date[4])
);
echo "Наибольший месяц в массиве: " . $max_month.'<br/>';

// Отсортировал массив $date по возрастанию
$sort = sort($date);

// Занёс в переменную $Selected последнее значение из массива $date
$Selected = array_pop($date);

// Привел значение из переменной $Selected к виду ('d.m.y H:i:s')
$res = date('d.m.y H:i:s', $Selected);

echo 'Дата из переменной: '.$res.'<br>';

echo 'Часовой пояс до изменения: '.date_default_timezone_get().'<br>'; // Выводим часовой пояс, который стоял до его изменения

date_default_timezone_set('America/New_York');

echo 'Часовой пояс после изменения: '.date_default_timezone_get().'<br>';// Выводим часовой пояс, который стоит после его изменения

$date2 = date('d.m.y H:i:s');
echo $date2;

