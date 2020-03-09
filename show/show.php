<?php
include 'server.php';
// var_dump($row);
include __DIR__ . '/../partials/header.php';
 ?>

   <div class="container">
     <div class="row">
       <div class="col-12">
         <ul>
           <li>id: <?php echo $row[id] ?></li>
           <li>room number: <?php echo $row[room_number] ?></li>
           <li>floor: <?php echo $row[floor] ?></li>
           <li>beds: <?php echo $row[beds] ?></li>
         </ul>
       </div>
     </div>
   </div>

   <?php __DIR__ . '/../partials/footer.php' ?>
