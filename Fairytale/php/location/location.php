<?php
include 'connection.php';
?>
<div class="events-section">
    <h2>location</h2>
    <form action="location/UpdateLocation.php" method="post">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>loc_name</th>
                <th>img_loc</th>
                <th>Weather</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT location.id, location.loc_name, location.img_loc, weather.name_W as weather_name
                    FROM location
                    LEFT JOIN Weather ON location.id_W = weather.id";

            $result = $conn->query($sql);

            if (!$result) {
                die("Ошибка запроса: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $loc_name = $row['loc_name'];
                $img_loc = $row['img_loc'];
                $weather_name = $row['weather_name'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><input type='text' name='updatedLocation[$id][loc_name]' value='$loc_name'></td>";
                echo "<td><img width='100' height='100' src=".$img_loc."</td>";
                echo "<td>$weather_name</td>";
                echo "<td><button type='submit' name='deleteLocation' value='$id' formnovalidate>Удалить строку</button></td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td></td>";
            echo "<td><input type='text' name='newLocName' placeholder='Location'></td>";
            echo "<td><input type='text' name='imgPath' placeholder='imgPath'></td>";
            echo "<td><input type='text' formnovalidate name='newWeather' placeholder='weatherId'></td>";
            echo "<td><button type='submit' name='addLocation'>Добавить строку</button></td>";
            echo "</tr>";

            
            ?>
        </table>
        <button type="submit" name="updateLocation" class="UpDate">Обновить строку</button>
    </form>
</div>