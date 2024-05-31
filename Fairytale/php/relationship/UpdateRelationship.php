<?php
include '../connection.php';

if (isset($_POST['updateRelationship'])) {
    foreach ($_POST['updatedDescription'] as $id => $data) {
        $id = mysqli_real_escape_string($conn, $id);
        $description = mysqli_real_escape_string($conn, $data['description']);

        $sql = "UPDATE relationship SET description = '$description' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deleteDescription'])) {
    $deleteDescription = mysqli_real_escape_string($conn, $_POST['deleteDescription']);

    $sql = "DELETE FROM relationship WHERE id = $deleteDescription";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($conn));
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['addDescription'])) {
    $newDescription = mysqli_real_escape_string($conn, $_POST['newDescription']);
    $newpers1 = mysqli_real_escape_string($conn, $_POST['newpers1']);
    $newpers2 = mysqli_real_escape_string($conn, $_POST['newpers2']);

    if (!empty($newDescription) && !empty($newpers1) && !empty($newpers2)) { 
        $sql = "INSERT INTO relationship (description, pers1, pers2) VALUES ('$newDescription', '$newpers1', '$newpers2')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}
?>