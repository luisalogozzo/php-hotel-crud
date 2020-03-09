<?php
include 'env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}
$sql = "SELECT * FROM stanze";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
$rooms = [];
// output data of each row
while($row = $result->fetch_assoc()) {
$rooms[] = $row;
// echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
}
} elseif ($result) {
echo "0 results";
} else {
echo "query error";
}
$conn->close();
