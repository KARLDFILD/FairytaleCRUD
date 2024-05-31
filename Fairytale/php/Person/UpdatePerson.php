<?php
include '../connection.php';

if (isset($_POST['updatePerson'])) {
    foreach ($_POST['updatedPerson'] as $id => $data) {
        $id = mysqli_real_escape_string($conn, $id);
        $name = mysqli_real_escape_string($conn, $data['name']);

        $sql = "UPDATE Person SET name = '$name' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deletePerson'])) {
    $deletePerson = mysqli_real_escape_string($conn, $_POST['deletePerson']);

    $sql = "DELETE FROM Person WHERE id = $deletePerson";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($conn));
    }

    header("Location: ../index.php");
    exit();
}

if (isset($_POST['addPerson'])) {
    $newname = mysqli_real_escape_string($conn, $_POST['newname']);
    $newCharacterId = mysqli_real_escape_string($conn, $_POST['newCharacterId']);

    if (!empty($newname) && !empty($newCharacterId)) { 
        $sql = "INSERT INTO Person (name, id) VALUES ('$newname', '$newCharacterId')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($conn));
        }
    }

    header("Location: ../index.php");
    exit();
}
?>