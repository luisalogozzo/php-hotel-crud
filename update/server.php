<?php
include __DIR__ . '/../database.php';

if(!empty($_GET['id'])) {
  $roomId = $_GET['id'];
}

$sql = "SELECT * FROM `stanze` WHERE `id` = $roomId";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
}


?>
