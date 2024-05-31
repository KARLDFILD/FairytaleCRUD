<?php
require_once __DIR__ . '/../connection.php';

$persons = array();

$queryPersons = "SELECT id, name FROM Person";
$resultPersons = mysqli_query($connect, $queryPersons);

if (!$resultPersons) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($resultPersons)) {
    $id = $row['id'];
    $name = $row['name'];
    $persons[$id] = $name;
}
?>