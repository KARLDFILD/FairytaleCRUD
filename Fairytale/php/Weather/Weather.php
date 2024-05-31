<?php
include 'connection.php';
?>
<div class="events-section">
    <h2>PesrQuest</h2>
    <form action="Weather/UpdateWeather.php" method="post">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>name_W</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT id, name_W FROM Weather";
            $result = $conn->query($sql);

            if (!$sql) {
                die("Ошибка запроса: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name_W = $row['name_W'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedWeather[$id][name_W]' value='$name_W'></td>";
                echo "<td><button type='submit' name='deleteWeather' value='$id' formnovalidate>Удалить строку</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td><input type='text' formnovalidate name='newWeather' placeholder='Weather'></td>";
            echo "<td><button type='submit' name='addWeather'>Добавить строку</button></td>";
            echo "</tr>";

            
            ?>
        </table>
        <button type="submit" name="updateWeather" class="UpDate">Обновить строку</button>
    </form>
</div>