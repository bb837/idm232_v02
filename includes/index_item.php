<?php
 while($recipe = mysqli_fetch_assoc($result)) {
    if (in_array($recipe["id"], $random_id)) {
        ?>
<a href="<?php 
              $rec_url = rawurldecode("recipe.php");
              $rec_url .= "?" . "id=" . urldecode($recipe["id"]);
              echo htmlspecialchars($rec_url);
            ?>">
<figure class="index_item">

    <img 
    
    src="images/<?php echo $recipe["id"] . "/" . $recipe["hero_image"] ?>"
    alt="<?php echo $recipe["title"] ?>"
    
    class="index_img">

    <figcaption class="item_cap">
            <h2><?php echo $recipe["title"]?></h2>
            <p>with <?php echo $recipe["side"]?></p>
        </figcaption>
</figure>
</a>
<?php
    }
 }
 ?>

