<?php
include 'connection.php';
?>
<div class="events-section">
    <h2>PesrQuest</h2>
    <form action="PesrQuest/UpdatePesrQuest.php" method="post">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>text</th>
                <th>Character</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT PesrQuest.id, PesrQuest.text, PesrQuest.id_pers, Person.name as character_name
                    FROM PesrQuest
                    LEFT JOIN Person ON PesrQuest.id_pers = Person.id";

            $result = $conn->query($sql);

            if (!$result) {
                die("Ошибка запроса: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $id_pers = $row['id_pers'];
                $text = $row['text'];
                $character_name = $row['character_name'];
                
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedQuest[$id][text]' value='$text'></td>";
                echo "<td>$character_name</td>";
                echo "<td><button type='submit' name='deleteQuest' value='$id' formnovalidate>Удалить строку</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td><input type='text' formnovalidate name='newQuest' placeholder='quest'></td>";
            echo "<td><input type='text' name='newCharacterId' placeholder='Character Id'></td>";
            echo "<td><button type='submit' name='addQuest'>Добавить строку</button></td>";
            echo "</tr>";

            
            ?>
        </table>
        <button type="submit" name="updateQuest" class="UpDate">Обновить строку</button>
    </form>
</div>