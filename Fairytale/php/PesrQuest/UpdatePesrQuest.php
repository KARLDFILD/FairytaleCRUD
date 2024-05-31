<?php
include '../connection.php';

if (isset($_POST['updateQuest'])) {
    foreach ($_POST['updatedQuest'] as $id => $data) {
        $id = mysqli_real_escape_string($conn, $id);
        $text = mysqli_real_escape_string($conn, $data['text']);

        $sql = "UPDATE PesrQuest SET text = '$text' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deleteQuest'])) {
    $deleteQuest = mysqli_real_escape_string($conn, $_POST['deleteQuest']);

    $sql = "DELETE FROM PesrQuest WHERE id = $deleteQuest";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($conn));
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['addQuest'])) {
    $newQuest = mysqli_real_escape_string($conn, $_POST['newQuest']);
    $newCharacterId = mysqli_real_escape_string($conn, $_POST['newCharacterId']);

    if (!empty($newQuest) && !empty($newCharacterId)) { 
        $sql = "INSERT INTO PesrQuest (text, id_pers) VALUES ('$newQuest', '$newCharacterId')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}
?>