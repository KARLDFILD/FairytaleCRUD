<?php
include '../connection.php';

if (isset($_POST['updateWeather'])) {
    foreach ($_POST['updatedWeather'] as $id => $data) {
        $id = mysqli_real_escape_string($conn, $id);
        $name_W = mysqli_real_escape_string($conn, $data['name_W']);

        $sql = "UPDATE Weather SET name_W = '$name_W' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deleteWeather'])) {
    $deleteWeather = mysqli_real_escape_string($conn, $_POST['deleteWeather']);

    $sql = "DELETE FROM Weather WHERE id = $deleteWeather";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($conn));
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['addWeather'])) {
    $newWeather = mysqli_real_escape_string($conn, $_POST['newWeather']);

    if (!empty($newWeather)) { 
        $sql = "INSERT INTO Weather (name_W) VALUES ('$newWeather')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}
?>