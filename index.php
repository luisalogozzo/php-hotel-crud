<?php
include 'database.php';
// var_dump($rooms);
include 'partials/header.php'
 ?>

 <!DOCTYPE html>
   <table class="table">
     <thead>
       <tr>
         <th>Room number</th>
         <th>Floor</th>
       </tr>
     </thead>
     <tbody>

       <?php
       if (!empty($rooms)) {
         foreach ($rooms as $room): ?>
           <tr>
            <td><?php echo $room['room_number'] ?></td>
            <td><?php echo $room['floor'] ?></td>
            <td><a href="show/show.php?id=<?php echo $room[id] ?>">VIEW</a></td>
            <td><a href="update/update.php?id=<?php echo $room['id'] ?>">UPDATE</a></td>
            <td><a href="#"></a>
            <form  action="delete/delete.php" method="post">
              <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
              <input class="btn-danger" type="submit" value="DELETE">
            </form>
          </td>
           </tr>
         <?php endforeach; ?>
       <?php  } ?>

     </tbody>
   </table>

   <?php include 'partials/footer.php' ?>
