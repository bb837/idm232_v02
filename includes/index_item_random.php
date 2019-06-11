<?php
 while($recipe = mysqli_fetch_assoc($result)) {
    if (in_array($recipe["id"], $random_id)) {
        require_once "includes/index_item.php"
    }
 }
 ?>

