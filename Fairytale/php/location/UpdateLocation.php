<?php
include '../connection.php';

if (isset($_POST['updateLocation'])) {
    foreach ($_POST['updatedLocation'] as $id => $data) {
        $id = mysqli_real_escape_string($conn, $id);
        $loc_name = mysqli_real_escape_string($conn, $data['loc_name']);

        $sql = "UPDATE location SET loc_name = '$loc_name' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deleteLocation'])) {
    $deleteLocation = mysqli_real_escape_string($conn, $_POST['deleteLocation']);

    $sql = "DELETE FROM location WHERE id = $deleteLocation";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($conn));
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['addLocation'])) {
    $newLocName = mysqli_real_escape_string($conn, $_POST['newLocName']);
    $imgPath = mysqli_real_escape_string($conn, $_POST['imgPath']);
    $newWeather = mysqli_real_escape_string($conn, $_POST['newWeather']);

    if (!empty($newLocName) && !empty($imgPath) && !empty($newWeather)) { 
        $sql = "INSERT INTO location (loc_name, img_loc, id_W) VALUES ('$newLocName', '$imgPath', '$newWeather')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}
?>