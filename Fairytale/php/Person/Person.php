<?php
include 'connection.php';
?>
<div class="events-section">
    <h2>Person</h2>
    <form action="Person/UpdatePerson.php" method="post">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT id, name FROM Person";
            $result = $conn->query($sql);

            if (!$sql) {
                die("Ошибка запроса: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedPerson[$id][name]' value='$name'></td>";
                echo "<td><button type='submit' name='deletePerson' value='$id' formnovalidate>Удалить строку</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            // echo "<td></td>";
            echo "<td><input type='text' name='newCharacterId' placeholder='Character Id'></td>";
            echo "<td><input type='text' formnovalidate name='newname' placeholder='name'></td>";
            echo "<td><button type='submit' name='addPerson'>Добавить строку</button></td>";
            echo "</tr>";

            
            ?>
        </table>
        <button type="submit" name="updatePerson" class="UpDate">Обновить строку</button>
    </form>
</div>