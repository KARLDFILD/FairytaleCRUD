<?php
require_once DIR . '/../connection.php';

if (isset($_POST['updateDataEvents'])) {
    foreach ($_POST['updatedDataEvents'] as $id => $data) {
        $id = mysqli_real_escape_string($connect, $id);
        $description = mysqli_real_escape_string($connect, $data['description']);

        $query = "UPDATE events SET description = '$description' WHERE id = $id";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($connect));
        }
    }

    header("Location: /Lab1/index.php");
    exit();
}

if (isset($_POST['deleteEvent'])) {
    $idToDelete = mysqli_real_escape_string($connect, $_POST['deleteEvent']);

    $query = "DELETE FROM events WHERE id = $idToDelete";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($connect));
    }

    header("Location: /Lab1/index.php");
    exit();
}

if (isset($_POST['addEvent'])) {
    $newDescription = mysqli_real_escape_string($connect, $_POST['newDescription']);
    $newCharacterId = mysqli_real_escape_string($connect, $_POST['newCharacterId']);

    if (!empty($newDescription) && !empty($newCharacterId)) { 
        $query = "INSERT INTO events (description, character_id) VALUES ('$newDescription', '$newCharacterId')";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($connect));
        }
    }

    header("Location: /Lab1/index.php");
    exit();
}
?>

таблица
<?php
require_once DIR . '/../connection.php';
?>
<div class="events-section">
    <h2>Таблица events</h2>
    <form action="events/update_events.php" method="post">
        <table>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Character Id</th>
            </tr>
            <?php
            $queryEvents = "SELECT events.id AS event_id, description, character_id FROM events";
            $resultEvents = mysqli_query($connect, $queryEvents);

            if (!$resultEvents) {
                die("Ошибка запроса: " . mysqli_error($connect));
            }

            while ($row = mysqli_fetch_assoc($resultEvents)) {
                $id = $row['event_id'];
                $description = $row['description'];
                $character_id = $row['character_id'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedDataEvents[$id][description]' value='$description'></td>";
                echo "<td>$character_id</td>";
                echo "<td><button type='submit' name='deleteEvent' value='$id' formnovalidate>Del</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td><input type='text' name='newDescription' placeholder='Description' required></td>";
            echo "<td><input type='text' name='newCharacterId' placeholder='Character Id' required></td>";
            echo "<td><button type='submit' name='addEvent'>+</button></td>";
            echo "</tr>";
            ?>
        </table>
        <button type="submit" name="updateDataEvents">Update events</button>
    </form>
</div>