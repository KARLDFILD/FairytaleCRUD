<?php
include 'connection.php';
?>
<div class="events-section">
    <h2>relationship</h2>
    <form action="relationship/UpdateRelationship.php" method="post">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Character 1</th>
                <th>Character 2</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT relationship.id, relationship.description, 
                           relationship.pers1, relationship.pers2, 
                           p1.name as pers1_name, p2.name as pers2_name
                    FROM relationship
                    LEFT JOIN Person p1 ON relationship.pers1 = p1.id
                    LEFT JOIN Person p2 ON relationship.pers2 = p2.id";

            $result = $conn->query($sql);

            if (!$result) {
                die("Ошибка запроса: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $description = $row['description'];
                $pers1_name = $row['pers1_name'];
                $pers2_name = $row['pers2_name'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedDescription[$id][description]' value='$description'></td>";
                echo "<td>$pers1_name</td>";
                echo "<td>$pers2_name</td>";
                echo "<td><button type='submit' name='deleteDescription' value='$id' formnovalidate>Удалить строку</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td><input type='text' formnovalidate name='newDescription' placeholder='Description'></td>";
            echo "<td><input type='text' name='newpers1' placeholder='pers1'></td>";
            echo "<td><input type='text' name='newpers2' placeholder='pers2'></td>";
            echo "<td><button type='submit' name='addDescription'>Добавить строку</button></td>";
            echo "</tr>";

            
            ?>
        </table>
        <button type="submit" name="updateRelationship" class="UpDate">Обновить строку</button>
    </form>
</div>