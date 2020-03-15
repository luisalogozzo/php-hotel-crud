  <?php
include __DIR__ . '/../database.php';

if (empty($GET['id'])) {
  die('ID non esistente');
}

$roomid = $_GET["id"];

$sql = "SELECT * FROM stanze WHERE `id` = $roomid";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
}
elseif ($result) {
  echo "0 results";
}
else {
  echo "query error";
}

$conn->close();

?>
