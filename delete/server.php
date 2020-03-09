<?php
include 'database.php';

$roomid = $_POST["id"];
$sql = "DELETE FROM stanze WHERE `id` = $roomid";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();

} elseif ($result) {
echo "0 results";
} else {
echo "query error";
}
$conn->close();
 ?>
