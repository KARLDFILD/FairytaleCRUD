<?php
require_once __DIR__ . '/../connection.php';

$quests = array();

$queryquests = "SELECT id, text FROM PesrQuest";
$resultquests = mysqli_query($connect, $queryquests);

if (!$resultquests) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($resultquests)) {
    $id = $row['id'];
    $text = $row['text'];
    $quests[$id] = $text;
}
?>