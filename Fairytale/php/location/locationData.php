<?php
require_once __DIR__ . '/../connection.php';

$loc_name = array();
$img_loc = array();
$id_w = array();


$queryLocation = "SELECT id, loc_name,img_loc, id_W FROM location";
$resultLocation = mysqli_query($connect, $queryLocation);

if (!$resultLocation) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($resultLocation)) {
    $id = $row['id'];
    $loc_n = $row['loc_name'];
    $img_l = $row['img_loc'];
    $weather = $row['id_W'];

    $loc_name[$id] = $loc_n;
    $img_loc[$id] = $img_l;
    $id_w[$id] = $weather;

}
?>