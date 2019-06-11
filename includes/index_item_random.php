<?php
 while($recipe = mysqli_fetch_assoc($result)) {
    if (in_array($recipe["id"], $random_id)) {
        include "includes/index_item.php";
    }
 }
 ?>

