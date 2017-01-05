<?php
    error_reporting(E_WARNING|E_NOTICE|E_ERROR|E_NOTICE);
    ini_set('display_errors', 1);
    
    // Задание №1:
    echo '<h3>Задание 1:</h3>';
    
    $name = 'Слава';
    $age = 19;
    
    echo 'Меня зовут '.$name.'!<br>'.'Мне '.$age.' лет!';
     
    unset($age,$name); // Удаление переменных
    echo '<br><br>';
    
    // Задание №2:
    echo '<h3>Задание 2:</h3>';
     
    define('GOROD', 'Kursk'); // Объявление константы
    
    echo '<strong>Проверка на существование константы: </strong>'.defined('GOROD').'<br>'; // Проверка на существование константы
    
    echo '<strong>Значение константы GOROD: </strong>'.GOROD; // Вывод значения
    
    echo '<p>Попытка изменить константу приводит к следующей ошибке: </p>';
    define('GOROD', 'Moscow'); // Попытка изменить константу
    
    // Задание №3:
    echo '<h3>Задание 3:</h3>';
    
    $book = 
    array(
        'Title'=>'ОС и среды',
        'Author'=>'Попов И.И.',
        'Pages'=>'500'
    );
    
   echo 'Недавно я прочитал книгу '.$book['Title'].', написанную автором '.$book['Author'].', я осилил все ' .$book['Pages'].' страниц!';
    
    // Задание №4:
   echo '<h3>Задание 4:</h3>';
   
    $book1 = 
    array(
        'Title1'=>'ОС и среды',
        'Author1'=>'Попов И.И.',
        'Pages1'=>'500'
    );
    
     $book2 = 
    array(
        'Title2'=>'PHP 5',
        'Author2'=>'Котеров Д. В.',
        'Pages2'=>'450'
    );
     
     $book = array($book1, $book2); 
     
     $pages = $book[0]['Pages1'] + $book[1]['Pages2']; // Сложение страниц двух книг
     
     echo 'Недавно я прочитал книги '.$book[0]['Title1']. ' и ' .$book[1]['Title2']. ', написанные соответсвенно авторами '.$book[0]['Author1']. ' и ' .$book[1]['Author2'].', я осилил в сумме ' .$pages.' страниц, не ожидал от сбея подобного!!!';
?>
