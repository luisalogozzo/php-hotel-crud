<?php
include __DIR__ . '/../database.php';
include 'server.php';
include __DIR__ . '/../partials/header.php';

if(!empty($_GET['id'])) {
  $roomId = $_GET['id'];
}

$sql = "SELECT * FROM 'stanze' WHERE `id` = '$roomId'";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
}


?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="room_number">Numero stanza</label>
          <input class="form-control" type="text" name="room_number" value="<?php echo $row['room_number'] ?>">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input class="form-control" type="text" name="floor" value="<?php echo $row['floor'] ?>">
        </div>
        <div class="form-group">
          <label for="beds">Numero letti</label>
          <input class="form-control" type="text" name="beds" value="<?php echo $row['beds'] ?>">
        </div>
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <input class="btn btn-submit" type="submit" name="" value="Salva">
        </div>
      </form>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>
