<?php
 // Подключение к базе данных
 $host = 'localhost';
 $user = 'root';
 $password = '';
 $db_name = 'Story';

 $connect = mysqli_connect($host, $user, $password, $db_name);

 $conn = new mysqli($host, $user, $password, $db_name);

 // Проверка подключения
 if ($conn->connect_error) {
     die("Ошибка подключения к базе данных: " . $conn->connect_error);
 }
?>