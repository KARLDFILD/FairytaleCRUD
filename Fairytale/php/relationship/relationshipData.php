<?php
require_once __DIR__ . '/../connection.php';

$description = array();

$queryDescription = "SELECT id, description FROM relationship";
$resultDescription = mysqli_query($connect, $queryDescription);

if (!$resultDescription) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($resultDescription)) {
    $id = $row['id'];
    $desc = $row['description'];
    $description[$id] = $desc;
}
?>